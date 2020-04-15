<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */
/*
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahsilatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);*/
?>
<div class="rapor">
<div class="sayfa">
  <div class="sol_taraf">
    <img class="resim" src='img/adalet.jpg'>
    <h4>TAŞDEMİR HUKUK BÜROSU</h4>
    <table>
      <tr><td><h5> AV. ŞÜKRAN TAŞDEMİR ELBİRLİK </h5><td></tr>
        <tr><td> Semerciler Mh. Yeni Bosna Cad. </td></tr>
        <tr><td> Başyapı Plaza No:3 D:3/4 Adapazarı </td></tr>
        <tr><td> Tel: 0264 277 59 65 - 277 62 02 </td></tr>
        <tr><td> </td></tr>
    </table>


  </div>
  <div class="sag_taraf"><h4>TAHSİLAT MAKBUZU</h4>Makbuz No :<strong><?=$model->id?></strong></div>
</div>

<div class="icerik">
  <?php
      echo '<strong>'.$model->banka.'</strong> ye borçlu '.'<strong>'. $model->borclu.'</strong>  dan Sakarya <strong>'.$model->icra_dairesi.
            '  .</strong> İcra Müdürlüğünün <strong>'.$model->icra_numarasi.'</strong>  esas sayılı dosyası <strong>'.$model->urun_numarasi.
            '  </strong>nolu kayda  <strong>'.number_format($model->yatirilan_miktar, 2 , "," ,  ".").
            '</strong> TL alınmıştır.'
  ?>
</div>
<div class="tarih">
  <table>
    <tr>
      <td >

      </td>
      <td>
          <h5>TARİH</h5>
         <h5><strong><?=date('d.m.Y',strtotime($model->tarih))?></strong></h5>

          <h5>TAHSİL EDEN</h5>
          <h5><strong><?=$model->tahsil_eden?></strong></h5>
      </td>
    </tr>
  </table>
</div>
</div>

<div class="rapor">
<div class="sayfa">
  <div class="sol_taraf">
    <img class="resim" src='img/adalet.jpg'>
    <h4>TAŞDEMİR HUKUK BÜROSU</h4>
    <table>
      <tr><td><h5> AV. ŞÜKRAN TAŞDEMİR ELBİRLİK </h5><td></tr>
        <tr><td> Semerciler Mh. Yeni Bosna Cad. </td></tr>
        <tr><td> Başyapı Plaza No:3 D:3/4 Adapazarı </td></tr>
        <tr><td> Tel: 0264 277 59 65 - 277 62 02 </td></tr>
        <tr><td> </td></tr>
    </table>


  </div>
  <div class="sag_taraf"><h4>TAHSİLAT MAKBUZU</h4>Makbuz No :<strong><?=$model->id?></strong></div>
</div>

<div class="icerik">
  <?php
      echo '<strong>'.$model->banka.'</strong> ye borçlu '.'<strong>'. $model->borclu.'</strong>  dan Sakarya <strong>'.$model->icra_dairesi.
            '  .</strong> İcra Müdürlüğünün <strong>'.$model->icra_numarasi.'</strong>  esas sayılı dosyası <strong>'.$model->urun_numarasi.
            '  </strong>nolu kayda  <strong>'.number_format($model->yatirilan_miktar, 2 , "," ,  ".").
            '</strong> TL alınmıştır.'
  ?>
</div>
<div class="tarih">
  <table>
    <tr>
      <td >

      </td>
      <td>
          <h5>TARİH</h5>
         <h5><strong><?=date('d.m.Y',strtotime($model->tarih))?></strong></h5>
         <h5>TAHSİL EDEN</h5>
          <h5><strong><?=$model->tahsil_eden?></strong></h5>
      </td>
    </tr>
  </table>
</div>
</div>
