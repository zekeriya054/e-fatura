<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'homeUrl'=>'/e-fatura/backend/web/index.php?r=tahsilat',
    'id' => 'app-backend',
    'name'=>'E-Fatura',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],/*
    'modules' => [
      'gridview' =>  [
        'class' => '\kartik\grid\Module',
     // enter optional module parameters below - only if you need to
     // use your own export download action or custom translation
     // message source
      'downloadAction' => 'gridview/export/download',
      'i18n' => [
        'class' => 'yii\i18n\PhpMessageSource',
        'basePath' => '@kvgrid/messages',
        'forceTranslation' => true,
        ],
      ],
    ],*/
    'aliases' => [
    '@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
      ],
      'defaultRoute' => 'tahsilat/index',
    'components' => [
      'request' => [
  		//	'baseUrl' => '/',

        'csrfParam' => '_csrf-backend',
  		],
/*
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
*/
        'user' => [

            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],

        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',

        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
/*
        'urlManager' => [
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
            ],
        ],
*/
    ],
    'params' => $params,
];
