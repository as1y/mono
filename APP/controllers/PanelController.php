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


    public function generatelinkAction()
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



        if ($_POST){


            $link = $Panel->GenerateLink($_POST);

            if ($link === false){
                $_SESSION['errors'] = "Заполните все поля";
                redir();
            }

        }







        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);



        $ADDINFO = $Panel->LoadAddInfo();




        $this->set(compact('ADDINFO', 'link'));




    }

    public function generateadvertAction()
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

        $link = "";


        if ($_POST){


            $ADV = $Panel->GenerateAdvert($_POST);

            if ($ADV === false){
                $_SESSION['errors'] = "Заполните все поля";
                redir();
            }

            if ($ADV == "nooffers"){
                $_SESSION['errors'] = "У компании нет офферов";
                redir();
            }

        }







        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);



        $ADDINFO = $Panel->LoadAddInfo();




        $this->set(compact('ADDINFO', 'ADV'));




    }



    public function addcouponAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Добавить купон',
            'description' => 'Добавить купон',
            'keywords' => 'Добавить купон',
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




        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);



        $ADDINFO = $Panel->LoadAddInfo();


        if ($_POST){




             $result = $Panel->AddCustomCoupon($_POST);

             if ($result == false){
                 $_SESSION['errors'] = "Заполните все поля!";
                 redir();
             }

            if ($result == true){

                $_SESSION['success'] = "Купон добавлен";
                redir();

            }



        }



        $this->set(compact('ADDINFO'));




    }


    public function listcouponsAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'Персональные купоны',
            'description' => 'Персональные купоны',
            'keywords' => 'Персональные купоны',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $customcoupons = $Panel->GetCustomCoupons();



        if ($_GET && $_GET['action'] =="del"){

            $Panel->DelCustomCoupons($_GET['id']);

            $_SESSION['success'] = "Купон удален";
            redir();
        }


        $this->set(compact('customcoupons'));



    }





}
?>