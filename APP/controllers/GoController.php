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

//        $coupon = $Panel->loadOneCoupon(50);
//
//
//        $DATA = [
//'subid4' => gaUserId(),
//'subid2' => $_SESSION['SystemUserId'],
// 'payment_sum' => "2022",
//  'offer_name' => "fsdf"
//
//        ];

//        $Panel->SendGoogleTransaction($coupon, $DATA);




        if (!empty($_GET['coupon'])){

            $Panel->RedirCoupon($_GET['coupon']);

        }






	}










}
?>