<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [

                        ['label' => 'Genel İşlemler', 'icon' => 'fa fa-calculator',
                            'url' => ['/'], 'active' => $this->context->route == 'site/index',
                            'items' => [
                                [
                                    'label' => 'Tahsilat İşlemleri',
                                    'icon' => 'fa fa-credit-card',
                                    'url' => '?r=tahsilat/',
                                    'active' => $this->context->route == 'tahsilat/index'
                                ],
                              /*
                                [
                                    'label' => 'Makbuz Raporlama',
                                    'icon' => 'fa fa-bar-chart',
                                    'url' => '?r=master1/',
                                    'active' => $this->context->route == 'master1/index'
                                ],
                              */
                                [
                                    'label' => 'Banka İşlemleri',
                                    'icon' => 'fa fa-suitcase',
                                    'url' => '?r=bankalar/',
                                    'active' => $this->context->route == 'bankalar/index',

                                ],
                                [
                                    'label' => 'Tahsildar İşlemleri',
                                    'icon' => 'fa fa-user',
                                    'url' => '?r=tahsildar/',
                                    'active' => $this->context->route == 'tahsildar/index',

                                ],



                            ]
                        ],


                      //  ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],

                    ],
                ]
        )
        ?>

    </section>
    <!-- /.sidebar -->
</aside>
