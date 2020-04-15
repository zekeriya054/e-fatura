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
  <table style="width:100%">
    <tr>
      <td style="width:50%">
       <tr><td> <img src='img/adalet.jpg' height="150" width="180"> </td></tr>
        <tr><td> <strong><h4>TAŞDEMİR HUKUK BÜROSU</h4></strong> </td></tr>
        <tr><td> <strong><h5> AV. ŞÜKRAN TAŞDEMİR ELBİRLİK </h5></strong> </td></tr>
        <tr><td> </td></tr>
        <tr><td class="kv-heading-2"> Semerciler Mh. Yeni Bosna Cad. </td></tr>
        <tr><td> Başyapı Plaza No:3 D:3/4 Adapazarı </td></tr>
        <tr><td> Tel: 0264 277 59 65 - 277 62 02 </td></tr>
        <tr><td> </td></tr>
      </td>
      <td style="width:50%"><h2>TAHSİLAT MAKBUZU<h2>
          <h5> Makbuz No :<strong><?=$model->id?></strong></h5>
      </td>
    </tr>
  </table>
  <?php
      echo '<strong>'.$model->banka.'</strong> ye borçlu '.'<strong>'. $model->borclu.'</strong>  dan Sakarya <strong>'.$model->icra_dairesi.
            '  .</strong> İcra Müdürlüğünün <strong>'.$model->icra_numarasi.'</strong>  esas sayılı dosyası <strong>'.$model->urun_numarasi.
            '  </strong>nolu kayda  <strong>'.$model->yatirilan_miktar.
            '</strong> TL alınmıştır.'
  ?>
  <table style="width:100%">
    <tr>
      <td style="width:50%">

      </td>
      <td style="width:50%">
          <h5>TARİH</h5>
         <h5><strong><?=date('d.m.Y',strtotime($model->tarih))?></strong></h5>
         <br>
          <h5>TAHSİL EDEN</h5>
          <h5><strong><?=$model->tahsil_eden?></strong></h5>
      </td>
    </tr>
  </table>
    <?php
    /* DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'borclu',
            'banka',
            'icra_dairesi',
            'icra_numarasi',
            'urun_numarasi',
            'yatirilan_miktar',
            [
              'attribute'=>'tarih',
              'format'=>['date','php:d.m.Y']
            ],
            'tahsil_eden',
        ],
    ]) ;*/?>

</div>
<?php
/*
$this->registerJsFile(
      '@web/js/deneme.js',
      ['depends' => [\yii\web\JqueryAsset::className()]]
    );
*/
?>
