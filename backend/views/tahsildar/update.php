<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tahsildar */

$this->title = 'Update Tahsildar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahsildar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="tahsildar-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
