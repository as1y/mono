<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class CategoryController extends AppController {


	public function indexAction(){

        $Panel = new Panel();

        $META = [
            'title' => 'Галлеря промокодов и скидок '.APPNAME,
            'description' => 'Галлеря купонов'.APPNAME,
            'keywords' => 'Галлеря купонов'.APPNAME,
        ];
        \APP\core\base\View::setMeta($META);


        if (empty($this->route['alias'])) redir("/");
        $category = $Panel->getContentCategory($this->route['alias']);
        $vitrina = $Panel->getAllCompanies();


        $BREADCRUMBS['HOME'] = ['Label' => "Промокоды", 'Url' => "/"];
        $BREADCRUMBS['DATA'][] = ['Label' => $category['name']];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);






        $this->set(compact('category', 'vitrina'));


	}










}
?>