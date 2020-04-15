<?php
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Bankalar;
use backend\models\TahsilatSearch;
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary'=>'',
    'showFooter' => true,

  //  'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn',
          'headerOptions' => ['style' => 'width:7%'],
        //  'contentOptions' => ['style' => 'font-size:4.5em;width:20px'],
        ],

      //  'id',
       [
          'attribute'=>'borclu',
          'headerOptions' => ['style' => 'width:25%'],
        //  'contentOptions' => ['style' => 'font-size:4.5em'],
       ] ,
      //  'banka',
        [
          'attribute' => 'banka',
        //  'contentOptions' => ['style' => 'font-size:4.5em'],
          'headerOptions' => ['style' => 'width:20%'],
          'value' => 'banka',
          'filter' => Html::activeDropDownList($searchModel, 'banka',
                            Bankalar::find()->select(['banka_ad'])->indexBy('banka_ad')->column(),['class'=>'form-control','prompt' => 'Tüm Bankalar...']),
          ],
        [
          'attribute'=>'icra_dairesi',
          'headerOptions' => ['style' => 'width:5%'],
        //  'contentOptions' => ['style' => 'font-size:4.5em'],

        ],
        [
          'attribute'=>'icra_numarasi',
          'headerOptions' => ['style' => 'width:12%'],
        //  'contentOptions' => ['style' => 'font-size:4.5em'],

        ],

        [
          'attribute'=>'urun_numarasi',
          'headerOptions' => ['style' => 'width:12%'],

        //  'contentOptions' => ['style' => 'font-size:4.5em'],
        ],
        [
          'attribute'=>'yatirilan_miktar',
          'footer' => number_format(TahsilatSearch::getTotal($dataProvider->models, 'yatirilan_miktar'), 2 , "," ,  "."),
          'headerOptions' => ['style' => 'width:10%'],
          'value'=>function($data){
            return number_format($data->yatirilan_miktar, 2 , "," ,  ".");
          },
        //  'format'=>['decimal',2],
        //  'contentOptions' => ['style' => 'font-size:4.5em'],
        ],

    ],


]); ?>
