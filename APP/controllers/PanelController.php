<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Project;
use APP\models\Add;
use APP\models\Profile;
use APP\models\Help;


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



        if ($_POST){


            $add = new Addp(); //Вызываем Моудль

            $add->load($_POST); // Берем из POST только те параметры которые нам нужны

          $res =  $add->validate($_POST);

            show($res);

            show($add->errors);

         //   $add->addproject($_POST);


            echo "ok";

            exit();
        }




//        $this->set(compact('testpar'));


    }




}
?>