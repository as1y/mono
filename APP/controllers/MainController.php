<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;


class MainController extends AppController {

	public function indexAction(){


        $META = [
            'title' => 'Биржа операторов на телефоне, удаленная работа оператором - CASHCALL.RU',
            'description' => 'CASHCALL.RU - Биржа операторов на телефоне',
            'keywords' => 'CASHCALL.RU - Биржа операторов на телефоне',
        ];



        \APP\core\base\View::setMeta($META);



	}


}
?>