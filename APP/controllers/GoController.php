<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class GoController extends AppController {


	public function indexAction(){

        $Panel = new Panel();
        $this->layaout = false;


        \APP\core\base\Model::SaveUsr();



        if (!empty($_GET['coupon'])){

            $Panel->RedirCoupon($_GET['coupon']);

        }






	}










}
?>