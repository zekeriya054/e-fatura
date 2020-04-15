<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',

    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'mdm\admin\Module',//'yii\caching\FileCache',
            
        ],

        'authManager' => [
        'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
    ],

    ],

];
