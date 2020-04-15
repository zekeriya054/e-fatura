<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tahsildar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahsildar-form">
  <div class="row">
    <div class="col-sm-5">
    <?php $form = ActiveForm::begin([
        'options' => ['autocomplete' => 'off']
    ]); ?>

    <?= $form->field($model, 'ad')->textInput(['maxlength' => true]) ?>
</div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
