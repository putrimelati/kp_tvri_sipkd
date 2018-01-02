<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

$this->title = Yii::t('app', 'Update Pegawai: {nameAttribute}', [
    'nameAttribute' => $model->nipeg,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pegawais'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nipeg, 'url' => ['view', 'id' => $model->nipeg]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
