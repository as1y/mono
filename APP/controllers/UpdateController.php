<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class UpdateController extends AppController {


	public function indexAction(){

        $Panel = new Panel();
        $this->layaout = false;



      if (!empty($_GET))   $token = AuthAdmitad();

        if (!empty($_GET) && ($_GET['action'] == "updatecompany")){

            $campanings = $Panel->getPrograms($token);
            $Panel->addMagazin($campanings, $token);
            $Panel->updatecheck("company");
            echo "<h1>КОМПАНИИ ОБНОВЛЕНЫ!</h1>";

        }





        if (!empty($_GET) && ($_GET['action'] == "updatecoupons")){


            $Panel->removeFinishCoupon();


            $Panel->addCoupons($token);



            $Panel->updatecheck("coupons");
            echo "<h1>КУПОНЫ ОБНОВЛЕНЫ!</h1>";



        }


        if (!empty($_GET) && ($_GET['action'] == "updatebanners")){

            $Panel->WorkWithBanners($token);
            $Panel->updatecheck("banners");
            echo "<h1>БАННЕРА!</h1>";
        }







    }










}
?>