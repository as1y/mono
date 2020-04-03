<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Panel;
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
        $BREADCRUMBS['DATA'][] = ['Label' => "Проекты"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);




//        $this->set(compact('testpar'));


    }




}
?>