<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class ShopController extends AppController {


	public function indexAction(){

        $Panel = new Panel();

        $META = [
            'title' => 'Галлеря промокодов и скидок '.APPNAME,
            'description' => 'Галлеря купонов'.APPNAME,
            'keywords' => 'Галлеря купонов'.APPNAME,
        ];
        \APP\core\base\View::setMeta($META);


        if (empty($this->route['alias'])) redir("/");


        $FILTER['GET'] = $_GET;
        $FILTER['ORDERBY'] = true;


        $shop = $Panel->getContentShop($this->route['alias']);
        $coupons = $Panel->getAllCoupons($shop['idadmi'], $FILTER );


        $councoupons = $Panel->countCounpons($coupons, $shop['idadmi']);


        $BREADCRUMBS['HOME'] = ['Label' => "Промокоды", 'Url' => "/"];
        $BREADCRUMBS['DATA'][] = ['Label' => $shop['name']];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



        $this->set(compact('shop', 'coupons', 'councoupons'));


	}










}
?>