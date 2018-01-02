<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_kendaraan".
 *
 * @property string $id
 * @property string $kd_barang
 * @property string $uraian
 * @property integer $nup
 * @property string $merk
 * @property string $tipe
 * @property string $thn_rakitan
 * @property integer $isi_silinder
 * @property string $no_mesin
 * @property string $no_rangka
 * @property string $no_bpkb
 * @property string $no_polisi
 * @property string $thn_perolehan
 * @property integer $nilai_perolehan
 * @property integer $nilai_buku
 * @property string $kondisi_barang
 * @property string $lokasi
 */
class DataKendaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_barang', 'uraian', 'nup', 'merk', 'tipe', 'thn_rakitan', 'isi_silinder', 'no_mesin', 'no_rangka', 'no_bpkb', 'no_polisi', 'thn_perolehan', 'nilai_perolehan', 'nilai_buku', 'kondisi_barang', 'lokasi'], 'required'],
            [['nup', 'isi_silinder', 'nilai_perolehan', 'nilai_buku'], 'integer'],
            [['thn_rakitan', 'thn_perolehan'], 'safe'],
            [['kd_barang', 'merk', 'no_bpkb'], 'string', 'max' => 15],
            [['uraian'], 'string', 'max' => 12],
            [['tipe', 'lokasi'], 'string', 'max' => 32],
            [['no_mesin'], 'string', 'max' => 20],
            [['no_rangka'], 'string', 'max' => 48],
            [['no_polisi'], 'string', 'max' => 11],
            [['kondisi_barang'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kd_barang' => Yii::t('app', 'Kode Barang'),
            'uraian' => Yii::t('app', 'Uraian'),
            'nup' => Yii::t('app', 'NUP'),
            'merk' => Yii::t('app', 'Merk'),
            'tipe' => Yii::t('app', 'Type'),
            'thn_rakitan' => Yii::t('app', 'Tahun Rakitan'),
            'isi_silinder' => Yii::t('app', 'Isi Silinder (cc)'),
            'no_mesin' => Yii::t('app', 'Nomor Mesin'),
            'no_rangka' => Yii::t('app', 'Nomor Rangka'),
            'no_bpkb' => Yii::t('app', 'Nomor BPKB'),
            'no_polisi' => Yii::t('app', 'Nomor Polisi'),
            'thn_perolehan' => Yii::t('app', 'Tahun Perolehan'),
            'nilai_perolehan' => Yii::t('app', 'Nilai Perolehan'),
            'nilai_buku' => Yii::t('app', 'Nilai Buku'),
            'kondisi_barang' => Yii::t('app', 'Kondisi Barang'),
            'lokasi' => Yii::t('app', 'Lokasi'),
        ];
    }
}
