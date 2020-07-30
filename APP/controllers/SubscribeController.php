<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class MainController extends AppController {

    public $BreadcrumbsControllerLabel = "Главная";
    public $BreadcrumbsControllerUrl = "/";


	public function indexAction(){

        $Panel = new Panel();

        $this->layaout = false;

        if ($_POST['type'] == "footer") $Panel->SubscribeFooter($_POST['email']);




	}











}
?>