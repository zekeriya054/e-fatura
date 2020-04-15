<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */
/*
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahsilatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-sm-4">
        <div  style="margin-top: 20px">
        <?php
            Modal::begin([
                //'title' => 'Datepicker with other fields',
                'toggleButton' => ['label' => 'Launch Modal', 'class' => 'btn btn-primary'],
            ]);
        ?>
        <? //=$model->field($model, 'username') ?>
        <div class="row" style="margin-bottom: 8px">
            <div class="col-sm-6">
                <?= DatePicker::widget(['name'=>'date_in_modal_1', 'options'=>['placeholder'=>'Select birthday...'], 'pluginOptions'=>['autoclose'=>true]]); ?>
            </div>
            <div class="col-sm-6">
                <?= DatePicker::widget(['name'=>'date_in_modal_2', 'options'=>['placeholder'=>'Select anniversary...'], 'pluginOptions'=>['autoclose'=>true]]); ?>
            </div>
        </div>
        <?//= $form->field($model, 'notes')->textarea() ?>
        <?php Modal::end();?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="alert alert-info"><p>DatePicker within a bootstrap modal window.</p></div>
    </div>
</div>
