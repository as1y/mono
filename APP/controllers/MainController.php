<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;


class MainController extends AppController {

	public function indexAction(){


        $META = [
            'title' => 'CASHCALL.RU - Биржа операторов на телефоне',
            'description' => 'CASHCALL.RU - Биржа операторов на телефоне',
            'keywords' => 'CASHCALL.RU - Биржа операторов на телефоне',
        ];



        \APP\core\base\View::setMeta($META);



	}


}
?>