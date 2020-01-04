<?php
namespace APP\controllers;
use APP\models\Wform;
use APP\core\Cache;
class SpecController extends AppController {
	public function indexAction(){
		$wform = new Wform;
		$userinfo['firstname'] = "Вася";
		$company['name'] = "Тест";
		$email = "raskrutkaweb@yandex.ru";
		//ОТПРАВЛЯЕМ ПИСЬМО
		echo "ok";
		$this->layaout = false;
	}




}
?>