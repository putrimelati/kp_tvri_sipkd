<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengembalian */

$this->title = Yii::t('app', 'Tambah Pengembalian');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengembalian'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
