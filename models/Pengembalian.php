<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengembalian".
 *
 * @property integer $id
 * @property integer $peminjaman
 * @property string $tanggal_pengembalian
 *
 * @property Peminjaman $peminjaman0
 */
class Pengembalian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengembalian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'peminjaman', 'tanggal_pengembalian'], 'required'],
            [['id', 'peminjaman'], 'integer'],
            [['tanggal_pengembalian'], 'safe'],
            [['peminjaman'], 'exist', 'skipOnError' => true, 'targetClass' => Peminjaman::className(), 'targetAttribute' => ['peminjaman' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Kode Pengembalian'),
            'peminjaman' => Yii::t('app', 'Peminjaman'),
            'tanggal_pengembalian' => Yii::t('app', 'Tanggal Pengembalian'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjaman0()
    {
        return $this->hasOne(Peminjaman::className(), ['id' => 'peminjaman']);
    }
}
