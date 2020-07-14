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

        $widget3 =   $Panel->getCompanies(['limit' => 3, 'sort' => 'ctr']);


        // Случайная сортировка
        $widget5 =   $Panel->getCompanies(['limit' => 5, 'sort' => 'random']);

        // Задаем ID компаний в ручную
        $widget4 =   $Panel->getCompanies(['custom' => [5,6,7,8]]);

        $widget20 =   $Panel->getCompanies(['limit' => 20, 'sort' => 'ctr']);

        $widgetcoupons =   $Panel->getContentCoupons(['limit' => 10, 'sort' => 'time']);


        $widgetcoupons2 = $Panel->getContentCoupons(['limit' => 8, 'sort' => 'used']);

        // Данные для слайдера

        // Магазины справа

        //  Баннера снизу

        // 4 ТОП магазина

        // Купоны которые истекут сегодня

        // Купоны по категориям

        $category = \APP\models\Panel::getCategory();

        $this->set(compact( 'vitrina', 'couponsliseder', 'widget3', 'widget5', 'widget4', 'widgetcoupons', 'widget20', 'widgetcoupons2', 'category'));



	}











}
?>