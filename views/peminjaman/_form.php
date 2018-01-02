<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'peminjam')->dropDownList(ArrayHelper::map($peminjam, 'nipeg', 'nama')) ?>
    <?= 
    '<label>Tanggal Berangkat</label>'. DatePicker::widget([
        'name' => 'Peminjaman[tanggal_penggunaan]', 
        'value' => date('Y-m-d'),
        'options' => ['placeholder' => 'Pilih tanggal berangkat', 'required'=>'required'],
        'pluginOptions' => [
            'format' => 'yyyy-m-d',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'kendaraan')->dropDownList(ArrayHelper::map($kendaraan, 'kd_barang', 'no_polisi')) ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_acc')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
