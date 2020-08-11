<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;
use APP\core\PHPM;



class SubscribeController extends AppController {


	public function indexAction(){

        $Panel = new Panel();

        $this->layaout = false;

        if ( !empty($_POST['type']) && $_POST['type'] == "footer") $Panel->SubscribeFooter($_POST['email']);


        if ( !empty($_POST['type']) && $_POST['type'] == "send") {

            $coupon = $Panel->SendCouponEmail($_POST);

            $DATA = [
                'coupon' => $coupon,
                ];

            PHPM::sendMail("sendcoupon",'Промокод  '.$coupon->companies['name'],$DATA, $_POST['email']);

        }



	}











}
?>