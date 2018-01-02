<?php

namespace app\models;

use Yii;
use yii\i18n\Formatter;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $nipeg NIP/NIK
 * @property string $nama Nama
 * @property string $tempat_lahir Tempat Lahir
 * @property string $tgl_lahir Tanggal Lahir
 * @property string $pendidikan Pendidikan Terakhir
 * @property string $jabatan jabatan
 * @property string $Agama Agama
 * @property string $jenis_kelamin jenis kelamin
 * @property string $status_pernikahan status pernikahan
 *
 * @property Peminjaman[] $peminjamen
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nipeg', 'nama', 'tempat_lahir', 'tgl_lahir', 'pendidikan', 'jabatan', 'Agama', 'jenis_kelamin', 'status_pernikahan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['jenis_kelamin', 'status_pernikahan'], 'string'],
            [['nipeg'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 50],
            [['tempat_lahir'], 'string', 'max' => 25],
            [['pendidikan'], 'string', 'max' => 5],
            [['jabatan'], 'string', 'max' => 40],
            [['Agama'], 'string', 'max' => 10],
            [['nipeg'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nipeg' => Yii::t('app', 'NIP/NIPEG'),
            'nama' => Yii::t('app', 'Nama'),
            'tempat_lahir' => Yii::t('app', 'Tempat Lahir'),
            'tgl_lahir' => Yii::t('app', 'Tanggal Lahir'),
            'pendidikan' => Yii::t('app', 'Pendidikan Terakhir'),
            'jabatan' => Yii::t('app', 'Jabatan'),
            'Agama' => Yii::t('app', 'Agama'),
            'jenis_kelamin' => Yii::t('app', 'Jenis Kelamin'),
            'jenisKelamin1' => Yii::t('app', 'Jenis Kelamin'),
            'status_pernikahan' => Yii::t('app', 'Status Pernikahan'),
            'statusPernikahan1' => Yii::t('app', 'Status Pernikahan'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['peminjam' => 'nipeg']);
    }
    public function getJenisKelamin1()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan';
    }
    public function getStatusPernikahan1()
    {
        return $this->status_pernikahan == 'N' ? 'Menikah' : 'Belum Menikah';
    }

}
