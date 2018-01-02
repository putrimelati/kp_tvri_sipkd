<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="container" id="login-wrapper">
    <div class="row">
        <br /><br /><br /><br /><br /><br />
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options'=>['autocomplete'=>'off'],
                        'validateOnBlur'=>false,
                        'fieldConfig' => [
                            'template'=>"{input}\n{error}",
                        ],
                    ]); ?>
                        <?= $form->field($model, 'username')->textInput(['placeholder'=>$model->getAttributeLabel('username'), 'autocomplete'=>'off']) ?>
                        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>$model->getAttributeLabel('password'), 'autocomplete'=>'off']) ?>
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                       <!--  <div style="color:#999;margin:1em 0;font-size:9px">
                             <?= Html::a('Lupa Password', ['site/request-password-reset']) ?>.
                        </div> -->
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
