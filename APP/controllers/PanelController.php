<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PanelController extends AppController {
	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Панель управления";
    public $BreadcrumbsControllerUrl = "/panel";



    public function indexAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Панель Администратора',
            'description' => 'Панель Администратора',
            'keywords' => 'Панель Администратора',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $lastconversion = $Panel->Getlastconversion();


        $this->set(compact('lastconversion'));



    }


    public function updateAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Обновление купонов и магазинов',
            'description' => 'Обновление купонов и магазинов',
            'keywords' => 'Обновление купонов и магазинов',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

//        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
//        \APP\core\base\View::setAssets($ASSETS);

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $updatestatus = $Panel->updatestatus();

        $this->set(compact('updatestatus'));




        // Работа с партнерскими программами



        // Работа с партнерскими программами

        // Работа по купонам

//         $Panel->addCoupons($token);
//         $Panel->removeFinishCoupon();

        /// //Удаление старых купонов


//
//        $Panel->WorkWithBanners($token);


//        $Panel->addCoupons($token);








    }


    public function flowAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Мои потоки',
            'description' => 'Мои потоки',
            'keywords' => 'Мои потоки',
        ];

        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);



//        $flows = $Panel->getFlow();

        $this->set(compact('flows'));




        // Работа с партнерскими программами



        // Работа с партнерскими программами

        // Работа по купонам

//         $Panel->addCoupons($token);
//         $Panel->removeFinishCoupon();

        /// //Удаление старых купонов


//
//        $Panel->WorkWithBanners($token);


//        $Panel->addCoupons($token);








    }








    public function addflowAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Добавить поток',
            'description' => 'Добавить поток',
            'keywords' => 'Добавить поток',
        ];


        $ASSETS[] = ["js" => "/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"];


        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/wizards/steps.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/selects/select2.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/uniform.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/inputs/inputmask.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/validation/validate.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/extensions/cookie.js"];

        $ASSETS[] = ["js" => "/assets/js/form_wizard.js"];
           $ASSETS[] = ["js" => "/global_assets/js/demo_pages/form_select2.js"];




        if ($this->isAjax() == true){

            if ($_POST['type'] == "rendercoupons"){
                $coupons = $Panel->getAllCoupons($_POST['company']);
                $this->layaout = false;
                RenderCouponsinADD($coupons);
            }


            if ($_POST['type'] == "generatekeywords"){
                $this->layaout = false;
                $keywords = $Panel->GenerateKeyWords($_POST['company']);
                echo $keywords;

            }


            if ($_POST['type'] == "generateads"){
                $this->layaout = false;

                if ($_POST['traffictype'] == "googlesearch")  $ADS = $Panel->GeneratetextAds($_POST);

                show($ADS);


            }





        }







        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);



        $ADDINFO = $Panel->LoadAddInfo();




        $this->set(compact('ADDINFO'));




    }





}
?>