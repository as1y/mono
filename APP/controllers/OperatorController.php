<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
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


        $panel = new Panel(); //Вызываем Моудль

        $company = $panel->allcompany($_SESSION['ulogin']['id']);



        $this->set(compact('company'));




    }



}
?>