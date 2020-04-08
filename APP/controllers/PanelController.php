<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PanelController extends AppController {
	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет рекламодателя";
    public $BreadcrumbsControllerUrl = "/panel";



    public function indexAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Кабинет рекламодателя',
            'description' => 'Кабинет рекламодателя',
            'keywords' => 'Кабинет рекламодателя ',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мои проекты"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        $panel = new Panel(); //Вызываем Моудль

        $company = $panel->allcompany($_SESSION['ulogin']['id']);

        if($company){



            $this->set(compact('company'));

        }else{

        }






//        $this->set(compact('testpar'));


    }


    public function addAction()
    {

        //Информация о компаниях клиента

        $META = [
            'title' => 'Добавление проекта',
            'description' => 'Добавление проекта',
            'keywords' => 'Добавление проекта',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Добавление проекта"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $add = new Addp(); //Вызываем Моудль

        if ($_POST){

            $add->load($_POST); // Берем из POST только те параметры которые нам нужны

           $validation = $add->validate($_POST);

            if ($validation){
                if ($add->addproject($_POST)){
                    redir("/panel/");
                }else{
                    $_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
                }
            }



            if (!$validation){
                $_SESSION['errors'] = "Что-то пошло не так.";


            }

            echo "ok";
            exit();
        }




//        $this->set(compact('testpar'));


    }

    public function refferalAction(){
       $Panel = new Panel();

    }

    public function balanceAction(){
        $Panel =  new Panel();
    }


    public function ticketAction(){
        $Panel =  new Panel();
    }

    public function profileAction(){
        $Panel =  new Panel();


        if ($_POST){

            $validation = $Panel->filevalidation($_FILES['file'], ['ext' => [".jpg",".png"]]);


            var_dump($validation);

            if (!$validation){
                $Panel->getErrorsVali();
            }




            exit("fu");
        }




        $META = [
            'title' => 'Профиль',
            'description' => 'Профиль',
            'keywords' => 'Профиль',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мой профиль"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);




    }
    public function messagesAction(){
        $Panel =  new Panel();
    }

    public function settingsAction(){
        $Panel =  new Panel();
    }

    public function faqAction(){
        $Panel =  new Panel();
    }




}
?>