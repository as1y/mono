<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class SearchController extends AppController {



	public function indexAction(){

        $Panel = new Panel();
        $CouponsPerPage = 20;

        $META = [
            'title' => 'Результат поиска '.APPNAME,
            'description' => 'Результат поиска'.APPNAME,
            'keywords' => 'Результат поиска'.APPNAME,
        ];
        \APP\core\base\View::setMeta($META);

//        $BREADCRUMBS['HOME'] = ['Label' => "Промокоды", 'Url' => "/"];
//        $BREADCRUMBS['DATA'][] = ['Label' => $category['name']];
//        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        if (empty($_POST['query'])) redir("/promocode/vse/");



        $PAGESLIST['ViewPage'] = 1;
        $PAGESLIST['CouponsPerPage'] = $CouponsPerPage;

        $query = $_POST['query'];

        $coupons = $Panel->FilterCoupons(['arrCategory' => '', 'arrType' => "", 'arrBrands' => '', 'searchQuery' => $query]);


        $catalogCategories = "search";
        //ЗАБОР АЛИАСОВ

        $this->set(compact( 'coupons','PAGESLIST', 'catalogCategories', 'query'));





	}










}
?>