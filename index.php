<?php

//Базовые переменные
define('ERRORS', '1' ); // 0 - нет 1 - ОТОБРАЖАЮТСЯ
define('WWW', __DIR__);
// Базовые переменные

// Переменные для приложения
define('BASEAVATAR', '/assets/oper1.jpg');
define('UrInvoicepath', '/uploads/user_invoice/');
define('BASELOGO', '/uploads/user_logo/baselogo.jpg');
// Переменные для приложения



require 'vendor/autoload.php';
require 'lib/functions.php'; //ОБЩИЕ ФУНКЦИИ
require 'lib/functions_app.php'; //ФУНКЦИИ ПРИЛОЖЕНИЯ

//Подключаем все конфигурации. Приоритет у main-local.php
define('CONFIG', require 'config/main.php');
define('APPNAME', 'COUPON');


//ВАЛИДАТОР
require_once( 'lib/Valitron/Validator.php' );

use APP\core\Mail;
use Valitron\Validator as V;



V::langDir(WWW.'/lib/Valitron/lang'); // always set langDir before lang.
V::lang('ru');
//ВАЛИДАТОР

//Почтовый сервис

require_once 'APP/core/PHPM.php';
//НАСТРОЙКА ПОЧТЫ НА ЯНДЕКС
define('MAILHOST', 'ssl://smtp.yandex.ru');
define('MAILUSERNAME', 'info@500рублей.рф');
define('MAILPASSWORD', 'barsuk343');
define('API', 'https://api.admitad.com');
//НАСТРОЙКА ПОЧТЫ НА ЯНДЕКС

use APP\core\Router;


session_start();



$router = new Router;
// ПУТИ ЗАДАЮТ НАДО УТОЧНИТЬ КАК РАБОТАЕТ
$router->add( 'user/login', ['controller'=>'User', 'action'=>'index']);
$router->add( '^category/(?P<alias>[a-z-]+)$', ['controller'=>'Category', 'action'=>'index']);
$router->add( '^shop/(?P<alias>[a-z-]+)$', ['controller'=>'Shop', 'action'=>'index']);
$router->add( '^brands/(?P<alias>[a-z-]+)$', ['controller'=>'Brands', 'action'=>'index']);
$router->add( '^promocode/(?P<alias>[a-z-]+)/?(?P<alias2>[a-z-]+)?$', ['controller'=>'Promocode', 'action'=>'index']);


$router->add( '^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=>'Page']);
$router->add( '^page/(?P<alias>[a-z-]+)$', ['controller'=>'Page', 'action'=>'view']);
// ПУТИ ЗАДАЮТ НАДО УТОЧНИТЬ КАК РАБОТАЕТ
//ДЕФОЛТНЫЕ ПРАВИЛА
$router->add( '^$', ['controller'=>'Main', 'action'=>'index']);
$router->add( '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//ДЕФОЛТНЫЕ ПРАВИЛА
$router->run(); // ЗАПУСКАЕМ РОУТЕР



?>