<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class PromocodeController extends AppController {



	public function indexAction(){

        $Panel = new Panel();
        $CouponsPerPage = 20;

        $META = [
            'title' => 'Витрина промокодов и скидок '.APPNAME,
            'description' => 'Витрина промокодов и скидок'.APPNAME,
            'keywords' => 'Витрина промокодов и скидок'.APPNAME,
        ];
        \APP\core\base\View::setMeta($META);

//        $BREADCRUMBS['HOME'] = ['Label' => "Промокоды", 'Url' => "/"];
//        $BREADCRUMBS['DATA'][] = ['Label' => $category['name']];
//        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        // Запрос на прямую
        if ($this->isAjax() == false){

            if (empty($this->route['alias'])) $this->route['alias'] = "";
            if (empty($this->route['alias2'])) $this->route['alias2'] = "";

            // Базовые страницы
            $PAGESLIST['ViewPage'] = 1;
            $PAGESLIST['CouponsPerPage'] = $CouponsPerPage;
            // Базовые страницы

            // Забираем Определяем ID бренда или Категории
            $brand = $Panel->FindIdBrandCoupon($this->route['alias']);
            $idbrand = $brand['id'];
            $category = $Panel->FindIdCategoryCoupon($this->route['alias2']);
            $idcat = $category['id'];

            //Генерируем META и H1

            if (!empty($idbrand)){
                $META = [
                    'title' => $brand['name']." - промокоды, купоны, скидки, акции",
                    'H1' => $brand['name']." - промокоды, купоны, скидки, акции"
                ];
                \APP\core\base\View::setMeta($META);
            }

            if (!empty($category)){
                $META = [
                    'title' => "Промокоды, купоны и скидки в категории ".$category['name'],
                    'H1' => "Промокоды, купоны и скидки в категории ".$category['name']
                ];
                \APP\core\base\View::setMeta($META);
            }



            //Генерируем META и H1


            // Обработка GET параметров
            $arrtype = (!empty($_GET['type'])) ? $_GET['type'] : "";

            if (empty($idbrand) && $this->route['alias'] != "vse") redir("/promocode/vse/");

            // Если запущена модалка
            if (!empty($_COOKIE['runmodal']) && !empty($_SESSION['POST'])){
                if (!empty($_SESSION['POST']['page'])) $PAGESLIST['ViewPage'] = $_SESSION['POST']['page'];
                if (!empty($_SESSION['POST']['arrType'])) $arrtype = $_SESSION['POST']['arrType'];
                $idbrand = $_SESSION['POST']['arrBrands'];
            }
            // Если запущена модалка

            // Отбираем купоны
            $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => $arrtype, 'arrBrands' => $idbrand]);

            // Если не выбран бренд
            if (empty($idbrand)){
                $catalogCategories = $Panel->LoadallCategories($idcat);
                $catalogCompany = $Panel->LoadCompanies($coupons, $idbrand);
            }

            // Если выбран
            if (!empty($idbrand)){
                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $idcat);
                $list = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => "", 'arrBrands' => ""]);
                $catalogCompany = $Panel->LoadCompanies($list, $idbrand);

            }

            $catalogType = $Panel->LoadTypes($coupons, $arrtype);

            $this->set(compact( 'coupons', 'catalogCompany', 'catalogCategories', 'catalogType', 'PAGESLIST'));



        }
        // Запрос на прямую





        // Перелистывание страниц
        if($this->isAjax()){

            $this->layaout = false;

            if (!empty($_POST['arrCategory'])) $_POST['arrCategory'] = $Panel->FindIdCategoryCoupon($_POST['arrCategory']);
            if (!empty($_POST['arrBrands'])) $_POST['arrBrands'] = $Panel->FindIdBrandCoupon($_POST['arrBrands']);

            // Загрузка купонов
            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType'], 'arrBrands' => $_POST['arrBrands']]);

            // Пагинация
            if (empty($_POST['arrCount'])){

                $PAGESLIST['CouponsPerPage'] = $CouponsPerPage;
                $PAGESLIST['ViewPage'] = (!empty($_POST['page'])) ? $_POST['page']  : 1;

                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $_POST['arrCategory']);

                generateResult($coupons, $PAGESLIST, $catalogCategories);
                $_SESSION['POST'] = $_POST;
                return true;
            }
            // Пагинация


        }
        // Перелистывание страниц

        return true;



	}










}
?>