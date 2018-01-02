<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataKendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nup')->textInput() ?>

    <?= $form->field($model, 'merk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thn_rakitan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_silinder')->textInput() ?>

    <?= $form->field($model, 'no_mesin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rangka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bpkb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_polisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thn_perolehan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_perolehan')->textInput() ?>

    <?= $form->field($model, 'nilai_buku')->textInput() ?>

    <?= $form->field($model, 'kondisi_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Ubah'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
