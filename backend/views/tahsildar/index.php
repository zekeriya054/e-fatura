<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TahsildarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tahsildar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahsildar-index">



    <p>
        <?= Html::a('Yeni Tahsildar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'ad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
