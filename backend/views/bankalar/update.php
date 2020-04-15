<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankalar */

$this->title = 'Banka Güncelle: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bankalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="bankalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
