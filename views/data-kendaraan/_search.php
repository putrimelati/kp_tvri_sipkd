<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataKendaraanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kendaraan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_barang') ?>

    <?= $form->field($model, 'uraian') ?>

    <?= $form->field($model, 'nup') ?>

    <?= $form->field($model, 'merk') ?>

    <?php // echo $form->field($model, 'tipe') ?>

    <?php // echo $form->field($model, 'thn_rakitan') ?>

    <?php // echo $form->field($model, 'isi_silinder') ?>

    <?php // echo $form->field($model, 'no_mesin') ?>

    <?php // echo $form->field($model, 'no_rangka') ?>

    <?php // echo $form->field($model, 'no_bpkb') ?>

    <?php // echo $form->field($model, 'no_polisi') ?>

    <?php // echo $form->field($model, 'thn_perolehan') ?>

    <?php // echo $form->field($model, 'nilai_perolehan') ?>

    <?php // echo $form->field($model, 'nilai_buku') ?>

    <?php // echo $form->field($model, 'kondisi_barang') ?>

    <?php // echo $form->field($model, 'lokasi') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
