<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataKendaraanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Kendaraan');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Tambah Data Kendaraan'), ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_barang',
            'uraian',
            'nup',
            'merk',
            // 'tipe',
            // 'thn_rakitan',
            // 'isi_silinder',
            // 'no_mesin',
            // 'no_rangka',
            // 'no_bpkb',
            // 'no_polisi',
            // 'thn_perolehan',
            // 'nilai_perolehan',
            // 'nilai_buku',
            // 'kondisi_barang',
            // 'lokasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
