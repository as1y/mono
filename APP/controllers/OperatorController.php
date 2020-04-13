<?php
namespace APP\controllers;
use APP\models\Operator;
use APP\core\base\Model;
use APP\models\Project;

class OperatorController extends AppController {

	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет оператора";
    public $BreadcrumbsControllerUrl = "/operator";



    public function callresultAction (){
        $this->layaout = false;

        $operator = new Operator();

        // Обработка ошибок

        if(!$this->isAjax()) message("Запрос не Ajax");

        if (empty($_GET['id'])) message("Ошибка получения данных");
        $idc = $_GET['id'];
        $company = $operator->getmycom($_GET['id']);
        if ($company === false) message("Ошибка допуска к проекту");
        // Обработка ошибок

        if (empty($_POST['optionresult'])) message("Обязательно выберете результат звонка");

        if ($_POST['zvonok'] == 1) message("Вы не совершили звонок");



        if ($_POST['optionresult'] == "otkaz") $operator->SetOtkaz($_POST);


        if ($company['status'] != 1) {
            $_SESSION['errors'] = "Проект ".$company['company']." в данный момент не активен";
            redir("/operator/my/");
        }

        // МОМЕНТ С ПРОВЕРКОЙ И ДОБАВЛЕНИЕМ ЗАПИСИ!


        // МОМЕНТ С ПРОВЕРКОЙ И ДОБАВЛЕНИЕМ ЗАПИСИ!
        $contactinfo = $operator->newcontact($idc);

        if (empty($contactinfo)) {
            $_SESSION['errors'] = "У компании".$company['company']." закончилась база для обзвона. Попробуйте позднее";
            redir("/operator/my/");
        }

        //Ставим бронь
        $operator->setbron($contactinfo['id']);
        //Ставим бронь

        var_dump(json_encode($contactinfo, true));

        exit();




        return false;
    }




    public function callAction(){

        $operator = new Operator();

        if (empty($_GET['id'])){
            $_SESSION['errors'] = "noparam";
            $this->set(compact('error'));
            return false;
        }

        $idc = $_GET['id'];
        $company = $operator->getmycom($_GET['id']);

        if ($company === false){
            $_SESSION['errors'] = "dopusk";
            $this->set(compact('error'));
            return false;
        }


        //Информация о компаниях клиента
        $META = [
            'title' => 'Рабочая область ',
            'description' => 'Рабочая область ',
            'keywords' => 'Рабочая область ',
        ];
        \APP\core\base\View::setMeta($META);
        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => $company['company']];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $ASSETS[] = ["js" => "/global_assets/js/plugins/notifications/sweet_alert.min.js"];


        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/uniform.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/switchery.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/switch.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/demo_pages/form_checkboxes_radios.js"];


        $ASSETS[] = ["js" => "/global_assets/js/plugins/pickers/pickadate/picker.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/pickers/pickadate/picker.date.js"];

        $ASSETS[] = ["js" => "/global_assets/js/demo_pages/picker_date.js"];


        \APP\core\base\View::setAssets($ASSETS);




        //if (isset($_GET['perezvon'])) $idcontact = $_GET['perezvon'];


        // Проверяем компанию на статус
        $company = $operator->checkcompany($idc);
        if (empty($company)) {
            $_SESSION['errors'] = "status";
            $this->set(compact('error'));
            return false;
        }

        // Берем контакт на звонок

        // Забираем скрипт
        $script = $operator->getscript($idc);
        // Забираем скрипт


        // Проверяем есть ли бронь на контакт. Если есть, то загружаем данные контакта из брони
        $contactinfo = $operator->Getbron($idc);
        if ($contactinfo){
            $this->set(compact('company', 'contactinfo', 'script'));
            return true;
        }
        // Проверяем есть ли бронь на контакт. Если есть, то загружаем данные контакта из брони


        // Брони на контакт нет. Берем новый контакт
        $contactinfo = $operator->newcontact($idc);
        if (empty($contactinfo)) {
            $_SESSION['errors'] = "no contact";
            return false;
        }

        //Ставим бронь
        $operator->setbron($contactinfo['id']);
        //Ставим бронь


        $this->set(compact('company', 'contactinfo', 'script'));
        return true;




    }


    public function indexAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Кабинет рекламодателя',
            'description' => 'Кабинет рекламодателя',
            'keywords' => 'Кабинет рекламодателя ',
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мои проекты"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $operator = new Operator(); //Вызываем Моудль







    }


    public function myAction()
    {

        $operator = new Operator();
        //Информация о компаниях клиента

        $META = [
            'title' => 'Мои проекты',
            'description' => 'Мои проекты',
            'keywords' => 'Мои проекты',
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мои проекты"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);


        $mycompanies = $operator->mycompanies();


        $this->set(compact('mycompanies'));


    }

    public function allAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Все проекты',
            'description' => 'Все проекты',
            'keywords' => 'Все проекты',
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Все проекты"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);


        $operator = new Operator(); //Вызываем Моудль
        $allcompanies = $operator->allcompanies();
        $this->set(compact('allcompanies'));

    }


    public function companyinfoAction(){

        $operator = new Operator();
        $idc = $_GET['id'];
        $company = $operator->getcom($_GET['id']);




        if ($_POST){

            $result =  $operator->joincompany($idc);

            if ($result == 1){
                $_SESSION['success'] = "Тикет добавлен";
                redir("/operator/my/");
            }else{
                $_SESSION['errors'] = $result;
                redir("/operator/companyinfo/?id=".$idc);
            }




        }




        $META = [
            'title' => 'Проект '.$company['company'],
            'description' => 'Проект '.$company['company'],
            'keywords' => 'Проект '.$company['company'],
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Все проекты", 'Url' => "/operator/all/"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Проект ".$company['company']];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);










        $this->set(compact('company'));



    }






}
?>