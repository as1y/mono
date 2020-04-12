<?php
namespace APP\controllers;
use APP\models\Operator;
use APP\core\base\Model;
use APP\models\Project;

class OperatorController extends AppController {

	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет оператора";
    public $BreadcrumbsControllerUrl = "/operator";



    public function callAction(){

        $operator = new Operator();
        $idc = $_GET['id'];
        $company = $operator->getcom($_GET['id']);

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



        if (isset($_GET['perezvon'])) $idcontact = $_GET['perezvon'];

        // Проверяем компанию на статус
        $company = $operator->checkcompany($idc);
        if (empty($company)) $error = "status";


        // Берем контакт на звонок
        $contactinfo = $operator->newcontact($idc);
        if (empty($contactinfo)) $error = "no contact";

        //Добавляем этот контакт в бронь. Что мы его звоним и больше его никто не будет брать


        $operator->setbron($contactinfo['id']);



        $script = $operator->getscript($idc);
        $this->set(compact('company'));




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