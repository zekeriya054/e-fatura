<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

<p> This program was written with PHP using yii2 avanced framework. You can use it to keep track of your customers' payments. </ P>

<p> 1. To use the program, copy the e-invoice folder to the main directory of your server.
     For example, if local xampp is installed, copy it as <b> c:\xampp\htdocs\e-fatura </b>.
<p> 2. Import the efatura.sql file with MySQL or MariaDB database.
     Create a user named <b> fatura </b> in MySQL and set its password to <b> fatura </b>.
     Authorize the user <b> fatura </b> for a database named <b> efatura </b>.
<p> 3. Type the following in the browser's address bar to run: <b> http://localhost/e-fatura</b>


<p>Bu program PHP ile beraber yii2 avanced framework kullanılarak yazılmıştır. Müşterilerinizin ödemelerini takip etmek amacıyla kullanabilirsiniz. </p>

<p> 1. Programı kullanabilmek için e-fatura klasörünü sunucunuzun ana dizinine kopyalayın. 
    Örneğin local xampp kuruluysa <b>c:\xampp\htdocs\e-fatura </b> olarak kopyalayın.
<p> 2. efatura.sql dosyasını MySQL veya MariaDB veritabanıyla import edin.
    MySQL de <b>fatura</b> isimli bir kullanıcı oluşturun ve şifresini <b>fatura</b> olarak belirleyin.
    <b>fatura</b> isimli kullanıcıyı <b>efatura</b> isimli veritabanı için yetkilendirin.
<p> 3. Çalıştırmak için tarayıcınıcın adres çubuğuna şunu yazın : <b> http://localhost/e-fatura</b>
