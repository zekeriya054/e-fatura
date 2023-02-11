<?php

namespace backend\controllers;

use Yii;
use backend\models\Tahsilat;
use backend\models\Bankalar;
use backend\models\Tahsildar;
use backend\models\TahsilatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use kartik\mpdf\Pdf;

use yii\log\Logger;
/**
 * TahsilatController implements the CRUD actions for Tahsilat model.
 */
class TahsilatController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionReport2()
    {
    //  if(Yii::$app->request->isAjax){
        return $this->renderAjax('modalview', [
            'data' => '$data',
        ]);
    //  }
    }

    public function actionMakbuzRapor($id) {
   Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        // get your HTML raw content without any layouts or scripts
         $content = $this->renderPartial('makbuz_rapor',['model' => $this->findModel($id)]);
         //return $content;
        //  $content='<h1>merhaba dünya</h1>';
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode'=>Pdf::MODE_UTF8,
          //  'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' =>
                    [
                    //  '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.css',
                      '@vendor/kartik-v/yii2-mpdf/src/assets/rapor.css',
                    ],
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:48px}',
             // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
             // call mPDF methods on the fly
            'methods' => [
              //  'SetHeader'=>['Tahsilat Makbuzu'],
                //'SetFooter'=>['{PAGENO}'],
            ]
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
  }
  public function actionRaporla()
  {
    //  $searchModel = new TahsilatSearch();

    //  $dataProvider = $searchModel->search(Yii::$app->request->queryParams,'raporla');


    $session = Yii::$app->session;
    $session->open();
    $queryParams = isset($session['query_params']) ? json_decode($session['query_params'],true) : [];
    $session->close();

    $searchModel = new TahsilatSearch();
    $dataProvider = $searchModel->search($queryParams,1);


      $content= $this->renderPartial('genel_rapor', [
          'searchModel' => $searchModel,
          'dataProvider' =>$dataProvider,
    ]);



    $pdf = new Pdf([
        // set to use core fonts only
        'mode'=>Pdf::MODE_UTF8,
      //  'mode' => Pdf::MODE_CORE,
        // A4 paper format
        'format' => Pdf::FORMAT_A4,
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT,
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER,
        // your html content input
        'content' => $content,
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.css',
        //'cssFile' => '@web/css/rapor.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}',
         // set mPDF properties on the fly
        //'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [
            'SetTitle' => 'Tahsilat Raporları',
            'SetHeader'=>($searchModel->createTimeStart!='') ? ['Tahsilat Raporları [ '.date('d.m.Y',strtotime($searchModel->createTimeStart)).' - '.date('d.m.Y',strtotime($searchModel->createTimeEnd)).' ]|| '.date('d.m.Y - H:i')]
                                                          : (['Tahsilat Raporları || '.date('d.m.Y - H:i')]),

            'SetFooter'=>['{PAGENO}'],
        ]
    ]);
    ini_set('memory_limit', '4096M');
    ini_set('max_execution_time', '300');
    ini_set("pcre.backtrack_limit", "5000000");
      return $pdf->render();
  }



    /**
     * Lists all Tahsilat models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new TahsilatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,0);
      //  echo "<script>console.log('Debug Objects: " . json_encode($dataProvider) . "' );</script>";
        $session = Yii::$app->session;
        $session->open();
        $session['query_params'] = json_encode(Yii::$app->request->queryParams);
        $session->close();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Tahsilat model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {


        return $this->render('view', [
            'model' => $this->findModel($id),

        ]);
    }

    /**
     * Creates a new Tahsilat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tahsilat();


        $icralar=['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'];
        $bankalar = Bankalar::find()->select(['banka_ad'])->indexBy('banka_ad')->column();
        $tahsildar = Tahsildar::find()->select(['ad'])->indexBy('ad')->column();
      //  $listBanka=ArrayHelper::map($bankalar,'id','banka_ad');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        elseif (Yii::$app->request->isAjax) {
          return $this->renderAjax('create', [
              'model' => $model,
              'bankalar' => $bankalar,
              'icralar'=>$icralar,
              'tahsildar'=>$tahsildar,
          ]);
        } else {
          return $this->render('create', [
              'model' => $model,
              'bankalar' => $bankalar,
              'icralar'=>$icralar,
              'tahsildar'=>$tahsildar,
          ]);
        }
/*
        return $this->renderAjax('create', [
            'model' => $model,
            'bankalar' => $bankalar,
            'icralar'=>$icralar,
            'tahsildar'=>$tahsildar,
        ]);*/
    }

    /**
     * Updates an existing Tahsilat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $icralar=['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'];
        $bankalar = Bankalar::find()->select(['banka_ad'])->indexBy('banka_ad')->column();
        $tahsildar = Tahsildar::find()->select(['ad'])->indexBy('ad')->column();
          if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,'bankalar'=>$bankalar,'icralar'=>$icralar,'tahsildar'=>$tahsildar,
        ]);
    }

    /**
     * Deletes an existing Tahsilat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tahsilat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tahsilat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tahsilat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
