<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;





/* @var $this yii\web\View */
/* @var $model app\models\Tahsilat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahsilat-form">
  <div class="row">
    <div class="col-sm-5">
    <?php $form = ActiveForm::begin([
                    'id' => 'Tahsilat',
                    'options' => ['autocomplete' => 'off']
                    //'action'=>'index.php?r=tahsilat%2Fcreate'
                  //  'enableAjaxValidation'=>true,

              ]); ?>

    <?= $form->field($model, 'borclu')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'banka')->dropDownList($bankalar,['prompt'=>'Banka seçiniz...'],
          ['options' =>
                    [
                      $model->banka => ['selected' => true]
                    ]
          ])
    ?>

    <?= $form->field($model, 'icra_dairesi')->dropDownList($icralar,['prompt'=>'İcra Dairesi seçiniz...'],
          ['options' =>
              [
                $model->banka => ['selected' => true]
              ]
          ])
    ?>

    <?= $form->field($model, 'icra_numarasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urun_numarasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yatirilan_miktar')->textInput(['maxlength' => true]) ?>

    <?php empty($model->tarih) ? $model->tarih = date('d.m.Y') : $model->tarih = date_format(date_create_from_format('Y-m-d', $model->tarih), 'd.m.Y');?>

    <?= DatePicker::widget([
        'model'=>$model,
        'attribute' => 'tarih',
        'name' => 'Test',
        'language' => 'tr',
        //'value' =>'today',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd.mm.yyyy',
                'defaultViewDate'=>'today',
                'todayHighlight'=>'true',


            ]
    ]);?>

    <?= $form->field($model, 'tahsil_eden')->dropDownList($tahsildar,['prompt'=>'Tahsildar seçiniz...'],
          ['options' =>
              [
                $model->tahsil_eden => ['selected' => true]
              ]
          ])
    ?>
</div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success','id'=>'btnKaydet']) ?>
        <button type="button" id='btn' class="btn btn-default" data-dismiss="modal">Kapat</button>

    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
/*
$script = <<< JS

      $('#btnKaydet').click(function () {

            var form = $(this);

            // return false if form still have some validation errors
            if (form.find('.has-error').length)
            {
                return false;
            }
            // submit form
            $.ajax({
            async: true,
            url    : form.attr('index.php?r=tahsilat%2Fcreate'),
            type   : 'POST',
            data   : form.serialize(),
            contentType: "application/json; charset=utf-8",
            success: function (response)
            {
                //var getupdatedata = $(response).find('#filter_id_test');
                // $.pjax.reload('#note_update_id'); for pjax update
                //$('#yiiikap').html(getupdatedata);
                //console.log(getupdatedata);
            },
            error  : function ()
            {
                console.log('internal server error');
            }
            });
            $( "#Tahsilat" ).submit();
            return false;
         });

    JS;
    $this->registerJs($script);
    */
  ?>
