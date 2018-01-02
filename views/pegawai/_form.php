<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nipeg')->textInput(['maxlength' => true, 'placeholder'=>'NIP/NIPEG']) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder'=>'Nama']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true, 'placeholder'=>'Tempat Lahir']) ?>

    <?= 
    '<label>Tanggal Lahir</label>'. DatePicker::widget([
        'name' => 'Pegawai[tgl_lahir]', 
        'value' => date('Y-m-d', strtotime('-30 years')),
        'options' => ['placeholder' => 'Pilih tanggal lahir', 'required'=>'required'],
        'pluginOptions' => [
            'format' => 'yyyy-m-d',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'pendidikan')->dropDownList(['TS' => 'Tidak Sekolah', 'SD'=>'Sekolah Dasar/Madrasah Ibtidaiyah', 'SMP'=>'Sekolah Menengah Pertama/ Madrasah Tsanawiyah', 'SMA'=>'Sekolah Menengah Atas/Kejuruan/Madrasah Aliyah', 'D1'=>'Diploma I', 'D2'=>'Diploma II', 'D3'=>'Diploma III', 'D4'=>'Diploma IV', 'S1'=>'Sarjana', 'S2'=>'Pasca Sarjana', 'S3'=>'Doktoral'], ['prompt'=>'Pilih Pendidikan ...']) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true, 'placeholder'=>'Jabatan']) ?>

    <?= $form->field($model, 'Agama')->dropDownList(['Islam'=>'Islam', 'Katolik'=>'Katolik', 'Protestan'=>'Protestan', 'Budha'=>'Budha', 'Hindu'=>'Hindu'], ['prompt'=>'Pilih Agama ...']) ?>

    <?= $form->field($model, 'jenis_kelamin')->radioList(['L'=>'Laki-laki', 'P'=>'Perempuan']) ?>

    <?= $form->field($model, 'status_pernikahan')->radioList(['N'=>'Menikah', 'L'=>'Belum Menikah']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
