<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataKendaraan */

$this->title = $model->no_polisi;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kendaraan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Anda yakin akan menghapus data ini?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kd_barang',
            'uraian',
            'nup',
            'merk',
            'tipe',
            'thn_rakitan',
            'isi_silinder',
            'no_mesin',
            'no_rangka',
            'no_bpkb',
            'no_polisi',
            'thn_perolehan',
            'nilai_perolehan',
            'nilai_buku',
            'kondisi_barang',
            'lokasi',
        ],
    ]) ?>

</div>
