<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Master;
use APP\models\Panel;
use APP\core\base\Model;


class MasterController extends AppController {
	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет РЕКЛАМОДАТЕЛЯ";
    public $BreadcrumbsControllerUrl = "/master";



    public function indexAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Кабинет РЕКЛАМОДАТЕЛЯ',
            'description' => 'Кабинет РЕКЛАМОДАТЕЛЯ',
            'keywords' => 'Кабинет РЕКЛАМОДАТЕЛЯ ',
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мои проекты"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $panel = new Master(); //Вызываем Моудль
        $company = $panel->allcompany($_SESSION['ulogin']['id']);


        
        $this->set(compact('company'));







    }


    public function addAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Добавление проекта',
            'description' => 'Добавление проекта',
            'keywords' => 'Добавление проекта',
        ];
        \APP\core\base\View::setMeta($META);


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Добавление проекта"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/wizards/steps.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/selects/select2.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/styling/uniform.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/inputs/inputmask.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/forms/validation/validate.min.js"];
        $ASSETS[] = ["js" => "/global_assets/js/plugins/extensions/cookie.js"];
        $ASSETS[] = ["js" => "/assets/js/form_wizard.js"];


        \APP\core\base\View::setAssets($ASSETS);


        $add = new Addp(); //Вызываем Моудль

        if ($_POST){

            $add->load($_POST); // Берем из POST только те параметры которые нам нужны

           $validation = $add->validate($_POST);

            if ($validation){
                if ($add->addproject($_POST)){
                    redir("/panel/");
                }else{
                    $_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
                    redir("/panel/add");
                }
            }



            if (!$validation){
                $_SESSION['errors'] = "Что-то пошло не так.";
                redir("/panel/add");

            }

            echo "ok";
            exit();
        }




//        $this->set(compact('testpar'));


    }



    public function operatorAction(){


        $Panel =  new Panel();


        $META = [
            'title' => 'Каталог операторов',
            'description' => 'Каталог операторов',
            'keywords' => 'Каталог операторов',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
        $ASSETS[] = ["js" => "/assets/js/datatables_basic.js"];
        \APP\core\base\View::setAssets($ASSETS);


        $operators = $Panel->getoperators();

        $this->set(compact('operators'));




    }




}
?>