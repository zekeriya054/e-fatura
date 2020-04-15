<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankalar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bankalar-form">
  <div class="row">
    <div class="col-sm-5">
    <?php $form = ActiveForm::begin([
            'options' => ['autocomplete' => 'off']
          ]); ?>

    <?= $form->field($model, 'banka_ad')->textInput(['maxlength' => true]) ?>
</div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
