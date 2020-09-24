<?php

//Базовые переменные
define('ERRORS', '1' ); // 0 - нет 1 - ОТОБРАЖАЮТСЯ
define('WWW', __DIR__);
// Базовые переменные

// Переменные для приложения
define('APPNAME', 'Эльдорадо');
define('IDCOMPANY', '19364');
// Переменные для приложения


//Подключаем все конфигурации.
define('CONFIG', require 'config/main.php');



require 'vendor/autoload.php';
require 'lib/functions.php'; //ОБЩИЕ ФУНКЦИИ
require 'lib/functions_app.php'; //ФУНКЦИИ ПРИЛОЖЕНИЯ



//ВАЛИДАТОР
require_once( 'lib/Valitron/Validator.php' );

use APP\core\Mail;
use Valitron\Validator as V;



V::langDir(WWW.'/lib/Valitron/lang'); // always set langDir before lang.
V::lang('ru');
//ВАЛИДАТОР

//Почтовый сервис

require_once 'APP/core/PHPM.php';

// ПОЧТА promocode@coupons.gallery


//НАСТРОЙКА ПОЧТЫ НА ЯНДЕКС
define('MAILHOST', 'ssl://smtp.yandex.ru');
define('MAILUSERNAME', 'promocode@coupons.gallery');
define('MAILPASSWORD', 'Bersuk113322');
define('API', 'https://api.admitad.com');
//НАСТРОЙКА ПОЧТЫ НА ЯНДЕКС

use APP\core\Router;


session_start();



$router = new Router;
// ПУТИ ЗАДАЮТ НАДО УТОЧНИТЬ КАК РАБОТАЕТ


$router->add( '^(?P<alias>[a-z-]+)$', ['controller'=>'Main', 'action'=>'index']);


//ДЕФОЛТНЫЕ ПРАВИЛА
$router->add( '^$', ['controller'=>'Main', 'action'=>'index']);


$router->add( '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//ДЕФОЛТНЫЕ ПРАВИЛА
$router->run(); // ЗАПУСКАЕМ РОУТЕР



?>