<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataKendaraan */

$this->title = Yii::t('app', 'Tambah Data Kendaraan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
