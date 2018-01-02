<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property int $id kode_peminjaman
 * @property string $peminjam nama_peminjam
 * @property string $tanggal_penggunaan tanggal_berangkat
 * @property string $kendaraan nama_pengemudi
 * @property string $keperluan keperluan_perjalanan
 * @property string $status_acc status belum atau telah disetujui
 *
 * @property DataKendaraan $kendaraan0
 * @property Pegawai $peminjam0
 * @property Pengembalian[] $pengembalians
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'peminjam', 'tanggal_penggunaan', 'kendaraan', 'keperluan'], 'required'],
            [['id'], 'integer'],
            [['tanggal_penggunaan'], 'safe'],
            [['status_acc'], 'string'],
            [['peminjam', 'kendaraan'], 'string', 'max' => 15],
            [['keperluan'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['kendaraan'], 'exist', 'skipOnError' => true, 'targetClass' => DataKendaraan::className(), 'targetAttribute' => ['kendaraan' => 'kd_barang']],
            [['peminjam'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['peminjam' => 'nipeg']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Kode Peminjaman'),
            'peminjam' => Yii::t('app', 'Nama Peminjaman'),
            'tanggal_penggunaan' => Yii::t('app', 'Tanggal Berangkat'),
            'kendaraan' => Yii::t('app', 'Kendaraan'),
            'keperluan' => Yii::t('app', 'Keperluan Perjalanan'),
            'status_acc' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraan0()
    {
        return $this->hasOne(DataKendaraan::className(), ['kd_barang' => 'kendaraan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjam0()
    {
        return $this->hasOne(Pegawai::className(), ['nipeg' => 'peminjam']);
    }

    public function getNamaPeminjam()
    {
        return $this->peminjam0->nama;
    }

    public function getNamaKendaraan()
    {
        return $this->kendaraan0->no_polisi;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::className(), ['peminjaman' => 'id']);
    }

    public function getStatusVerifikasi()
    {
        return $x = ($this->status_acc == 0) ? 'Belum Disetujui' : 'Disetujui';
    }
}
