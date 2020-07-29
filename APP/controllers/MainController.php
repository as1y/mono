<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class MainController extends AppController {

    public $BreadcrumbsControllerLabel = "Главная";
    public $BreadcrumbsControllerUrl = "/";


	public function indexAction(){

        $Panel = new Panel();

        $META = [
            'title' => 'Галлеря промокодов и скидок '.APPNAME,
            'description' => 'Галлеря купонов'.APPNAME,
            'keywords' => 'Галлеря купонов'.APPNAME,
        ];



        $BREADCRUMBS['HOME'] = false;
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        \APP\core\base\View::setMeta($META);



        $couponsliseder =   $Panel->LoadCustomCupons([12,111,50]);

        $widget3 =   $Panel->getShops(['limit' => 3]);


        // Случайная сортировка
        $widget5 =   $Panel->getShops(['limit' => 5, 'sort' => 'random']);

        // Задаем ID компаний в ручную
        $widget4 =   $Panel->getShops(['custom' => [5,6,7,8]]);

        $widget20 =  $Panel->getShops(['limit' => 20]);

        $shops = $Panel->getShops(['limit' => 13]);



        $widgetcoupons =   $Panel->getContentCoupons(['limit' => 10, 'sort' => 'time']);

        $widgetcoupons2 = $Panel->getContentCoupons(['limit' => 8, 'sort' => 'used']);




        $this->set(compact( 'vitrina', 'couponsliseder', 'widget3', 'widget5', 'widget4', 'widgetcoupons', 'widget20', 'widgetcoupons2', 'shops'));



	}











}
?>