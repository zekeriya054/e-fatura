<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankalar */

$this->title = 'Yeni Banka';
$this->params['breadcrumbs'][] = ['label' => 'Bankalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bankalar-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
