<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\Bankalar;
use kartik\daterange\DateRangePicker;


/* @var $this yii\web\View */
/* @var $searchModel app\models\TahsilatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Tahsilatlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahsilat-index">


    <p>
        <?= Html::a('Yeni Tahsilat', ['create'], ['class' => 'btn btn-success']) ?>
        <?="<script>console.log('Debug Objects: " . json_encode(Yii::$app->request->queryParams) . "' );</script>"?>
        <?="<script>console.log('Debug Objects: " . Yii::$app->request->queryString. "' );</script>"?>


        <?= Html::a('Yazdır', ['raporla'], ['class' => 'btn btn-success','target'=>'_blank']) ?>
        <?php /*echo Html::button('Yeni Tahsilat Modal', ['value'=>Url::to(['tahsilat/create']), 'class' => 'btn btn-success','id'=>'modalButton']); */?>
    </p>

    <?php
    /*
      Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modal',
        'header'=>'<h4>Yeni Tahsilat</h4>',
        'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
      ]);
      echo "<div id='modalContent'></div>";
      Modal::end();
      */
    ?>
    <?php
    /*
      Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modalView',
        'header'=>'<h4>Yeni Tahsilat</h4>',
        'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
      ]);
      echo "<div id='modalContentView'></div>";
      Modal::end();
      */
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
      //  'showFooter' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            [
              'attribute'=>'borclu',
            //  'contentOptions' => ['style' => 'font-size:30px'],
            ],
          //  'banka',
            [
              'attribute' => 'banka',
              'headerOptions' => ['style' => 'width:15%'],
              'value' => 'banka',
              'filter' => Html::activeDropDownList($searchModel, 'banka',
                                Bankalar::find()->select(['banka_ad'])->indexBy('banka_ad')->column(),['class'=>'form-control','prompt' => 'Tüm Bankalar...']),
              ],
            [
              'attribute'=>'icra_dairesi',
              'headerOptions' => ['style' => 'width:5%'],
            ],
            [
              'attribute'=>'icra_numarasi',
              'headerOptions' => ['style' => 'width:12%'],

            ],

            [
              'attribute'=>'urun_numarasi',
              'headerOptions' => ['style' => 'width:12%'],
            ],
            [
              'attribute'=>'yatirilan_miktar',
              'value'=>function($data){
                return number_format($data->yatirilan_miktar, 2 , "," ,  ".");
              },

              'headerOptions' => ['style' => 'width:10%'],
              //'format'=>['decimal',2],
            ],
/*
            [
                'attribute' => 'tarih',
                'format' => ['date', 'php:d.m.Y']
            ],
*/
          [
            'attribute'=>'tarih',
            'headerOptions' => ['style' => 'width:10%'],
            'filter'=> DateRangePicker::widget([
                'name'=>'daterange',
                'model' => $searchModel,
                'attribute' => 'createTimeRange',
                'startAttribute'=>'createTimeStart',
                'endAttribute'=>'createTimeEnd',
                'language'=>'tr',
              //  'startInputOptions' => ['value' => '10.02.2020'],
            //    'endInputOptions' => ['value' => '12.02.2020'],
                'convertFormat'=>true,
              //  'disabled'=>false,
              //  'useWithAddon'=>true,

                'presetDropdown'=>true,
                'hideInput'=>false,
                //'useWithAddon'=>true,
                'pluginOptions'=>[
                    'locale'=>[
                        'separator'=>' - ',
                      //  'cancelLabel' => 'Temizle',
                      //  'appleyLabel'=>'Uygula',
                    ],

                    'opens'=>'left'
                ],
                'pluginEvents' => [
                	'apply.daterangepicker' => 'function(ev, picker) {
                        if($(this).val() == "") {
                            picker.callback(picker.startDate.clone(), picker.endDate.clone(), picker.chosenLabel);
                        }
                    }',
                ],
            ]),
            'format' => ['date', 'php:d.m.Y'],

          ],

            //'tahsil_eden',

            [
              'class' => 'yii\grid\ActionColumn',
              /*
              'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'update') {
                  $url =Url::to(['tahsilat/update','id' => $model->id]);
                  return $url;
                }
                else if($action==='view'){
                  $url =Url::to(['tahsilat/view','id' => $model->id]);
                  return $url;
                }
              },
              'template'=>'{view}{update}{delete}',
              'buttons' =>
              [
                'update'=>function ($url, $model, $key) {
                  return  Html::button('<span class="glyphicon glyphicon-pencil"></span>', ['value'=>Url::to(['tahsilat/update','id'=>$model->id]), 'class' => 'btn btn-link','id'=>'updateButton']);
                },
                'view' => function ($url, $model, $key) {
                  return  Html::button('<span class="glyphicon glyphicon-eye-open"></span>', ['value'=>Url::to(['tahsilat/view','id'=>$model->id]), 'class' => 'btn btn-link','id'=>'viewButton']);
                },
              ],*/
            ],
        ],

    ]); ?>
</div>

<?php
/*
$this->registerJsFile(
      '@web/js/deneme.js',
      ['depends' => [\yii\web\JqueryAsset::className()]]
    );
*/
/*
$script = <<< JS
    $('#modalButton').click(function(){
      $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
      });
      $('viewButton').click(function(){

          $('#modalView').modal('show')
                .find('#modalContentView')
                .load($(this).attr('value'));
      });
    $('#updateButton').click(function(){

        $('#modalView').modal('show')
              .find('#modalContentView')
              .load($(this).attr('value'));
    });

    JS;
    $this->registerJs($script);*/

?>
