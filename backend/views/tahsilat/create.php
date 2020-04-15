<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */

$this->title = 'Yeni Tahsilat';
$this->params['breadcrumbs'][] = ['label' => 'Tahsilatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahsilat-create">



    <?= $this->render('_form', [
        'model' => $model,'bankalar'=>$bankalar,'icralar'=>$icralar,'tahsildar'=>$tahsildar,
    ]) ?>

</div>
