<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TahsilatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahsilat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'borclu') ?>

    <?= $form->field($model, 'banka') ?>

    <?= $form->field($model, 'icra_dairesi') ?>

    <?= $form->field($model, 'icra_numarasi') ?>

    <?php // echo $form->field($model, 'urun_numarasi') ?>

    <?php // echo $form->field($model, 'yatirilan_miktar') ?>

    <?php // echo $form->field($model, 'tarih') ?>

    <?php // echo $form->field($model, 'tahsil_eden') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
