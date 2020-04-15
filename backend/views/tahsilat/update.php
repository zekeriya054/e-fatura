<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */

$this->title = 'Güncellenen Tahsilat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahsilatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="tahsilat-update">



    <?= $this->render('_form', [
        'model' => $model,'bankalar'=>$bankalar,'icralar'=>$icralar,'tahsildar'=>$tahsildar,
    ]) ?>

</div>
