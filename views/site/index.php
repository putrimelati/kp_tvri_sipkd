<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <br><br><br><br><br><br>
        <h2>Selamat datang
        <?php 
        if(isset(Yii::$app->user->identity)) {
            echo "<b>".Yii::$app->user->identity->first_name." ".Yii::$app->user->identity->last_name."</b>";
        }
        ?>
         di <br><strong style="color: #007196">SISTEM INFORMASI PEMINJAMAN KENDARAAN DINAS!</strong></h2>
        <p class="lead">LPP TVRI Stasiun Riau Kepri</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>
</div>
