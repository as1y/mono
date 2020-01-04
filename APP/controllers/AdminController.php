<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Panel;
use APP\models\Project;
class AdminController extends AppController {
	public $layaout = 'PANELADMIN';

	public function indexAction(){
		//if($_SESSION['ulogin']['email'] != "raskrutkaweb@yandex.ru") redir("/admin/");

		$panel = new Panel;
		//Информация о компаниях клиента
		\APP\core\base\View::setMeta('Админ Панел - '.NAME.' ','Панель управления','Панель управления');
		// ПЕРЕДАЧА ДАННЫХ
		$this->set(compact(''));
		// ПЕРЕДАЧА ДАННЫХ
	}
}