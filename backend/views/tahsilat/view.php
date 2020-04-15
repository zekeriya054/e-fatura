<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahsilatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tahsilat-view">



    <p>

        <?= Html::a('Yazdır', ['makbuz-rapor', 'id' => $model->id], ['class' => 'btn btn-success','target'=>'_blank']) ?>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* echo Html::button('Güncelle Modal', ['value'=>Url::to(['tahsilat/update','id' => $model->id]), 'class' => 'btn btn-success','id'=>'modalButton']);*/ ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silmek istediğinize emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
    /*
      Modal::begin([
        'headerOptions' => ['id' => 'modalHeader2'],
        'id' => 'modal',
        'header'=>'<h4>Tahsilat Güncelle</h4>',
        'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
      ]);
      echo "<div id='modalContent'></div>";
      Modal::end();
      */
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'borclu',
            'banka',
            'icra_dairesi',
            'icra_numarasi',
            'urun_numarasi',
            [
              'attribute'=>'yatirilan_miktar',
            //  'format'=>['decimal',2],
            'value'=>function($data){
              return number_format($data->yatirilan_miktar, 2 , "," ,  ".");
            }
            ],
            [
              'attribute'=>'tarih',
              'format'=>['date','php:d.m.Y']

            ],
            'tahsil_eden',
        ],
    ]) ?>

</div>
<?php
/*
$this->registerJsFile(
      '@web/js/deneme.js',
      ['depends' => [\yii\web\JqueryAsset::className()]]
    );
*/
?>
