<?php

// ДОСТУПЫ VOXIMPLANT
$account_id = '1895581';
$api_key = 'a7c15131-6186-482d-a619-84c2be598655';
// ДОСТУПЫ VOXIMPLANT


define('ERRORS', '1' ); // 0 - нет 1 - ОТОБРАЖАЮТСЯ
define('WWW', __DIR__);
define('ROOT',dirname(__DIR__) );

require 'vendor/autoload.php';
require 'lib/functions.php'; //ОБЩИЕ ФУНКЦИИ
require 'lib/functions_app.php'; //ФУНКЦИИ ПРИЛОЖЕНИЯ

//Подключаем все конфигурации. Приоритет у main-local.php
define('CONFIG',array_merge(require 'config/main.php',require 'config/main-local.php'));

//ВАЛИДАТОР
require_once( 'lib/Valitron/Validator.php' );

use APP\core\Mail;
use Valitron\Validator as V;
V::langDir(__DIR__.'/lib/Valitron/lang'); // always set langDir before lang.
V::lang('ru');
//ВАЛИДАТОР

//Почтовый сервис

require_once 'APP/core/Mail.php';



use APP\core\Router;
session_start();
$router = new Router;
// ПУТИ ЗАДАЮТ НАДО УТОЧНИТЬ КАК РАБОТАЕТ
$router->add( 'user/login', ['controller'=>'User', 'action'=>'index']);
$router->add( '^project/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=>'Project']);
$router->add( '^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=>'Page']);
$router->add( '^page/(?P<alias>[a-z-]+)$', ['controller'=>'Page', 'action'=>'view']);
// ПУТИ ЗАДАЮТ НАДО УТОЧНИТЬ КАК РАБОТАЕТ
//ДЕФОЛТНЫЕ ПРАВИЛА
$router->add( '^$', ['controller'=>'Main', 'action'=>'index']);
$router->add( '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//ДЕФОЛТНЫЕ ПРАВИЛА
$router->run(); // ЗАПУСКАЕМ РОУТЕР



?>