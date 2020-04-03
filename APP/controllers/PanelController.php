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


    public function indexAction()
    {

        //Информация о компаниях клиента

        \APP\core\base\View::setMeta('Панель управления - ' . CONFIG['NAME'] . ' ', 'Панель управления', 'Панель управления');


//        $this->set(compact('testpar'));


    }




}
?>