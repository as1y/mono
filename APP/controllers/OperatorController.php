<?php
namespace APP\controllers;
use APP\models\Operator;
use APP\core\base\Model;


class OperatorController extends AppController {

	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет обератора";
    public $BreadcrumbsControllerUrl = "/operator";



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


        $operator = new Operator(); //Вызываем Моудль


        $allcompanies = $operator->allcompanies();


        $this->set(compact('allcompanies'));




    }


}
?>