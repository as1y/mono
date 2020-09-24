<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class MainController extends AppController {

    public $BreadcrumbsControllerLabel = "Главная";
    public $BreadcrumbsControllerUrl = "/";
    public $CouponsPerPage = 20;

	public function indexAction(){

        $Panel = new Panel();

        $PAGESLIST['ViewPage'] = 1;
        $PAGESLIST['CouponsPerPage'] = $this->CouponsPerPage;

        $ABOUTCOMPANY = $Panel->LoadCompany(IDCOMPANY);


        // Перелистывание страниц
        if($this->isAjax()){

            $this->layaout = false;

            if (!empty($_POST['arrCategory'])) $_POST['arrCategory'] = $Panel->FindIdCategoryCoupon($_POST['arrCategory']);

            // Загрузка купонов
            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType']]);

            // Пагинация
            if (empty($_POST['arrCount'])){

                $PAGESLIST['CouponsPerPage'] = $this->CouponsPerPage;
                $PAGESLIST['ViewPage'] = (!empty($_POST['page'])) ? $_POST['page']  : 1;

                generateResult($coupons, $PAGESLIST);
                $_SESSION['POST'] = $_POST;
                return true;
            }
            // Пагинация


        }
        // Перелистывание страниц

        if (empty($this->route['alias'])) $this->route['alias'] = "";

        // Забираем Определяем ID бренда или Категории
        $arrtype = "";
        if ($this->route['alias'] == "promocode") $arrtype = "promocode";
        if ($this->route['alias'] == "sale") $arrtype = "action";

        $category = $Panel->FindIdCategoryCoupon($this->route['alias']);
        $idcat = $category['id'];


        $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => $arrtype]);

        $bestdiscount =$Panel->getBestDiscount($coupons);


        $META = [
            'title' => 'Промокоды '.APPNAME.' 📌 купоны, акции. Скидки до '.$bestdiscount,
            'H1' => 'Промокоды '.APPNAME,
            'description' => 'Промокоды '.APPNAME,
            'keywords' => 'Все промокоды и скидки в магазине '.APPNAME,
        ];


        if (!empty($idcat)){
            $META = [
                'title' => $category['name']. '📌 промокоды в '.APPNAME.'. Скидки до '.$bestdiscount,
                'H1' => 'Промокоды в категории  "'.$category['name'].'" ',
                'description' => 'Промокоды '.APPNAME,
                'keywords' => 'Все промокоды и скидки в магазине '.APPNAME,
            ];
        }

        if ($arrtype == "promocode"){
            $META = [
                'title' =>  APPNAME.' промокоды. Скидки до '.$bestdiscount,
                'H1' => 'ФИЛЬТР: (промокоды) "'.APPNAME.'" ',
                'description' => 'Промокоды '.APPNAME,
                'keywords' => 'Все промокоды и скидки в магазине '.APPNAME,
            ];
        }

        if ($arrtype == "action"){
            $META = [
                'title' =>  APPNAME.' акции. Скидки до '.$bestdiscount,
                'H1' => 'ФИЛЬТР: (акции) "'.APPNAME.'" ',
                'description' => 'Промокоды '.APPNAME,
                'keywords' => 'Все промокоды и скидки в магазине '.APPNAME,
            ];
        }





        $BREADCRUMBS['HOME'] = false;
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);
        \APP\core\base\View::setMeta($META);





        $this->set(compact( 'ABOUTCOMPANY', 'coupons', 'PAGESLIST', 'idcat' , 'arrtype'));



	}








    public function newsAction(){

        $Panel = new Panel();

        $META = [
            'title' => 'Информация об обновлениях промокодов и купонов '.APPNAME,
            'description' => 'Информация об обновлениях промокодов и купонов '.APPNAME,
            'keywords' => 'Информация об обновлениях промокодов и купонов '.APPNAME,
        ];

        $BREADCRUMBS['HOME'] = false;
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);
        \APP\core\base\View::setMeta($META);


        $PAGESLIST['ViewPage'] = 1;
        $PAGESLIST['CouponsPerPage'] = $this->CouponsPerPage;

        $ABOUTCOMPANY = $Panel->LoadCompany(IDCOMPANY);


        // Перелистывание страниц
        if($this->isAjax()){

            $this->layaout = false;

            if (!empty($_POST['arrCategory'])) $_POST['arrCategory'] = $Panel->FindIdCategoryCoupon($_POST['arrCategory']);

            // Загрузка купонов
            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType']]);

            // Пагинация
            if (empty($_POST['arrCount'])){

                $PAGESLIST['CouponsPerPage'] = $this->CouponsPerPage;
                $PAGESLIST['ViewPage'] = (!empty($_POST['page'])) ? $_POST['page']  : 1;

                generateResult($coupons, $PAGESLIST);
                $_SESSION['POST'] = $_POST;
                return true;
            }
            // Пагинация


        }
        // Перелистывание страниц

        if (empty($this->route['alias'])) $this->route['alias'] = "";

        // Забираем Определяем ID бренда или Категории
        $arrtype = "";
        if ($this->route['alias'] == "promocode") $arrtype = "promocode";
        if ($this->route['alias'] == "sale") $arrtype = "action";

        $category = $Panel->FindIdCategoryCoupon($this->route['alias']);
        $idcat = $category['id'];


        $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => $arrtype]);



        $this->set(compact( 'ABOUTCOMPANY', 'coupons', 'PAGESLIST', 'idcat' , 'arrtype'));



    }


}
?>