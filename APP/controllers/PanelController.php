<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PanelController extends AppController {
	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет оператора";
    public $BreadcrumbsControllerUrl = "/panel";



    public function indexAction()
    {

        //Информация о компаниях клиента

            $this->layaout = false;
             $this->view = false;

            if ($_SESSION['ulogin']['role'] == "R") redir("/master");
           if ($_SESSION['ulogin']['role'] == "O") redir("/operator");



    }



    public function refferalAction(){
       $Panel = new Panel();


        $META = [
            'title' => 'Партнерская программа',
            'description' => 'Партнерская программа',
            'keywords' => 'Партнерская программа',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Партнерская программа"];


        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);


        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);







       $allref =   $Panel->getrefferals();


        $this->set(compact('allref'));



    }

    public function balanceAction(){
        $Panel =  new Panel();

        $balancelog = [];
        $balancelog = $Panel->balancelog();

        if ($balancelog == NULL) $balancelog = [];



        $META = [
            'title' => 'Баланс',
            'description' => 'Баланс',
            'keywords' => 'Баланс',
        ];
        \APP\core\base\View::setMeta($META);

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Баланс"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);





        $this->set(compact('balancelog'));

    }






    public function  viewticketAction(){
        $Panel =  new Panel();

        if ($_POST){
           $result = $Panel->addmessageticket($_POST, $_GET['id']);


            if ($result == 1) redir("/panel/viewticket/?id=".$_GET['id']);
            else{
                $_SESSION['errors'] = $result;
                redir("/panel/viewticket/?id=".$_GET['id']);
            }

        }


        if (!empty($_GET['action']) && $_GET['action'] == "close"){

            $Panel->closeticket($_GET['id']);
            redir("/panel/ticket/");


        }


        $tickets = $Panel->gettickets($_GET['id']);

        if (!$tickets) return false;

        $messages = json_decode($tickets['messages'], true);





        $META = [
            'title' => 'Системные тикеты',
            'description' => 'Системные тикеты',
            'keywords' => 'Системные тикеты',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Тикеты", 'Url' => "/panel/ticket/"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Тикет ".$tickets['zagolovok']];



        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $this->set(compact('tickets', 'messages'));




    }


    public function ticketAction(){
        $Panel =  new Panel();

        if ($_POST){


           $result = $Panel->addticket($_POST);

            if ($result == 1){
                $_SESSION['success'] = "Тикет добавлен";
                redir("/panel/ticket/");
            }else{
                $_SESSION['errors'] = $result;
                redir("/panel/ticket/");

            }


        }


        $META = [
            'title' => 'Системные тикеты',
            'description' => 'Системные тикеты',
            'keywords' => 'Системные тикеты',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Тикеты"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $tickets = $Panel->getticket();


        $this->set(compact('tickets'));




    }


    public function loadzapisAction(){
        $this->layaout = false;
        $this->view = false;

        $Panel = new Panel();




        if (!empty($_GET['action']) && $_GET['action'] == "ClearRecord"){



            $Panel->resetrecord();


            redir("/panel/profile");

        }


        if ($_FILES['file']['size'] > 0){

            $validation = $Panel->filevalidation($_FILES['file'], ['ext' => ["mp3"], 'type' => 'audio/mp3']);

            if (!$validation) message("Ошибка валидации");


            if ($validation){

                $urlnew = AudioUploadPath.$_FILES['file']['name'];


                copy($_FILES['file']['tmp_name'], $urlnew); // Копируем из общего котла в тизерку

                if (!empty($_SESSION['ulogin']['audio'])) unlink($_SESSION['ulogin']['audio']);

                $Panel->saverecord($_FILES['file']['name']);

                $_SESSION['ulogin']['audio'] = $_FILES['file']['name'];
//                $_SESSION['success'] = "Аудио презентация сохранена";

                go("/panel/profile/");
            }




        }else{
            message("error");
        }





        return true;
    }

    public function profileAction(){
        $Panel =  new Panel();


        if ($_POST && $_FILES['file']['size'] > 0){

            $validation = $Panel->filevalidation($_FILES['file'], ['ext' => ["jpg","png"], 'type' => 'image/jpeg']);


            if (!$validation){
                $Panel->getErrorsVali();
            }

            if ($validation){

                $name = md5(uniqid(rand(),1));
                $urlnew = "uploads/user_avatar/".$name.".jpg";

                copy($_FILES['file']['tmp_name'], $urlnew); // Копируем из общего котла в тизерку


                if (!empty($_SESSION['ulogin']['avatar'])) unlink($_SESSION['ulogin']['avatar']);

                $Panel->changeavatar("/".$urlnew);
                $_SESSION['ulogin']['avatar'] = "/".$urlnew;
                $_SESSION['success'] = "Аватар изменен";

                redir("/panel/profile");
            }



        }



        if ($_POST){



            $result = $Panel->changeprofileinfo($_POST);
            if ($result == 1){
                $_SESSION['success'] = "Изменения сохранены";
                redir("/panel/profile/");
            }else{
                $_SESSION['errors'] = $result;
                redir("/panel/profile/");
            }



        }


        $META = [
            'title' => 'Профиль',
            'description' => 'Профиль',
            'keywords' => 'Профиль',
        ];
        \APP\core\base\View::setMeta($META);

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мой профиль"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $ASSETS[] = ["js" => "/global_assets/js/demo_pages/form_actions.js"];
        $ASSETS[] = ["js" => "/assets/js/form_inputs.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/selects/select2.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/uniform.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"];
        $ASSETS[] = ["js" => "/assets/js/uploader_bootstrap.js"];
        $ASSETS[] = ["js" => "//cdn.webrtc-experiment.com/RecordRTC.js"];



        \APP\core\base\View::setAssets($ASSETS);








    }


    public function messagesAction(){

        $Panel =  new Panel();


        $META = [
            'title' => 'Мои диалоги',
            'description' => 'Мои диалоги',
            'keywords' => 'Мои диалоги',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Даилоги"];


        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);



        $this->set(compact('tickets'));




    }


    public function dialogAction(){

        $Panel =  new Panel();


        $META = [
            'title' => 'Мои диалоги',
            'description' => 'Мои диалоги',
            'keywords' => 'Мои диалоги',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Даилоги"];


        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);



        $this->set(compact('tickets'));




    }





    public function settingsAction(){
        $Panel =  new Panel();


        if (!empty($_POST['changepassword'])){

            $result = $Panel->changepassword($_POST);
            if ($result == 1){
                $_SESSION['success'] = "Изменения сохранены";
                redir("/panel/settings/");
            }else{
                $_SESSION['errors'] = $result;
                redir("/panel/settings/");
            }

        }

        if (!empty($_POST['changenotification'])){

            $result = $Panel->changenotification($_POST);
            $_SESSION['success'] = "Изменения сохранены";
            redir("/panel/settings/");
        }






        $META = [
            'title' => 'Настройки аккаунта',
            'description' => 'Настройки аккаунта',
            'keywords' => 'Настройки аккаунта',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Настройки аккаунта"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/wizards/steps.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/selects/select2.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/uniform.min.js"];
        $ASSETS[] = ["js" => "/assets/js/form_wizard.js"];
        \APP\core\base\View::setAssets($ASSETS);





    }

    public function faqAction(){
        $Panel =  new Panel();


        $META = [
            'title' => 'FAQ',
            'description' => 'FAQ',
            'keywords' => 'FAQ',
        ];

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



    }




}
?>