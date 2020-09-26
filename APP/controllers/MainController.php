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

        // Пагинация и навигация
        if (empty($this->route['alias'])) $this->route['alias'] = "";
        $PAGESLIST['ViewPage'] = 1;
        $PAGESLIST['CouponsPerPage'] = $this->CouponsPerPage;
        // Пагинация и навигация

        // Загрузка информации о компании
        $ABOUTCOMPANY = $Panel->LoadCompany(IDCOMPANY);
        // Загрузка информации о компании

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



        // Редиректим на КУПОН
        if ($this->route['alias'] == "go"){
            if (!empty($_GET['coupon'])) $Panel->RedirCoupon($_GET['coupon']);
        }
        // Редиректим на КУПОН


        // Забираем Определяем ID бренда или Категории
        $arrtype = "";
        if ($this->route['alias'] == "promocode") $arrtype = "promocode";
        if ($this->route['alias'] == "sale") $arrtype = "action";

        $category = $Panel->FindIdCategoryCoupon($this->route['alias']);
        $idcat = $category['id'];


        show($idcat);

        $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => $arrtype]);

        $bestdiscount =$Panel->getBestDiscount($coupons);

        $catalogCategories = $Panel->LoadCategoriesSimple($idcat);

        $META = writemeta($category, $bestdiscount, $arrtype, $idcat);




        $BREADCRUMBS['HOME'] = false;
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);
        \APP\core\base\View::setMeta($META);





        $this->set(compact( 'ABOUTCOMPANY', 'coupons', 'PAGESLIST', 'idcat' , 'arrtype', 'catalogCategories'));



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