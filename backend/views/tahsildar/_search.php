<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TahsildarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahsildar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad') ?>

    <div class="form-group">
        <?= Html::submitButton('Ara', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Temizle', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
