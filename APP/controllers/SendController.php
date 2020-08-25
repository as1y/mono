<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class SendController extends AppController {


	public function indexAction(){

        $Panel = new Panel();
        $this->layaout = false;

        $Panel->sendPostBackGA();




	}










}
?>