<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BankalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bankalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bankalar-index">



    <p>
        <?= Html::a('Yeni Banka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "{begin} - {end} arası kayıtlar gösteriliyor, toplam kayıt :{totalCount}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'banka_ad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
