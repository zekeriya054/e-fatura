<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tahsildar */

$this->title = 'Yeni Tahsildar';
$this->params['breadcrumbs'][] = ['label' => 'Tahsildar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahsildar-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
