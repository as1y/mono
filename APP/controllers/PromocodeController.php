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
            'title' => 'Галлеря промокодов и скидок '.APPNAME,
            'description' => 'Галлеря купонов'.APPNAME,
            'keywords' => 'Галлеря купонов'.APPNAME,
        ];
        \APP\core\base\View::setMeta($META);

//        $BREADCRUMBS['HOME'] = ['Label' => "Промокоды", 'Url' => "/"];
//        $BREADCRUMBS['DATA'][] = ['Label' => $category['name']];
//        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        if (empty($this->route['alias'])) $this->route['alias'] = "";



        //ЗАБОР АЛИАСОВ

    // Если запрос напрямую
        if ($this->isAjax() == false){

//            show($_COOKIE);
//            echo "СЕССИЯ<br>";
//            show($_SESSION);

            $PAGESLIST['ViewPage'] = 1;
            $PAGESLIST['CouponsPerPage'] = $CouponsPerPage;
            $arrtype=  "";

            // Бренд/Категория
            //brand/category
            if (empty($this->route['alias2'])) $this->route['alias2'] = "";
            // ЗАБОР АЛИАСОВ
                $idbrand = $Panel->FindIdBrandCoupon($this->route['alias']);
                $idcat = $Panel->FindIdCategoryCoupon($this->route['alias2']);
            // ЗАБОР АЛИАСОВ

            // Редирект с несуществующих страниц
            if (empty($idbrand) && $this->route['alias'] != "vse") redir("/promocode/vse/");



            if (!empty($_COOKIE['runpromocode']) && !empty($_SESSION['POST'])){

                if (!empty($_SESSION['POST']['page'])) $PAGESLIST['ViewPage'] = $_SESSION['POST']['page'];
                if (!empty($_SESSION['POST']['arrType'])) $arrtype = $_SESSION['POST']['arrType'];
                $idbrand = $_SESSION['POST']['arrBrands'];

            }



            // Отбираем купоны
            $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => $arrtype, 'arrBrands' => $idbrand]);

//            echo "Найдено купонов: ".count($coupons)."<br>";
//            echo "ID категории : ".$idcat."<br>";
//            echo "ID отмеченного бренда: ".$idbrand."<br>";




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

            $catalogType = $Panel->LoadTypes($coupons);


            $this->set(compact( 'coupons', 'catalogCompany', 'catalogCategories', 'catalogType', 'PAGESLIST'));

            return true;



        }
        // Если запрос напрямую




        // ЗАПРОС AJAX НА ГЕНЕРАЦИЮ КОНТЕНТА
        if($this->isAjax()){
            $this->layaout = false;

            // Преобразование Алиаса категории в ID
            $countfilter = 0;
            if (!empty($_POST['arrCategory'])){
                $_POST['arrCategory'] = $Panel->FindIdCategoryCoupon($_POST['arrCategory']);
                $countfilter++;
            }

            if (!empty($_POST['arrBrands'])){
                $_POST['arrBrands'] = $Panel->FindIdBrandCoupon($_POST['arrBrands']);
                $countfilter++;
            }

            if (!empty($_POST['arrType']))  $countfilter++;



            // Загрузка купоно`в
            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType'], 'arrBrands' => $_POST['arrBrands']]);

            // Если обращение просто за набором купонов
            if (empty($_POST['arrCount'])){


                $PAGESLIST['CouponsPerPage'] = $CouponsPerPage;
                $PAGESLIST['ViewPage'] = (!empty($_POST['page'])) ? $_POST['page']  : 1;


                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $_POST['arrCategory']);


                generateResult($coupons, $PAGESLIST, $catalogCategories);
                $_SESSION['POST'] = $_POST;

                return true;
            }




            // Если выбрана только скидка
            if (!empty($_POST['arrType']) && $countfilter == 1){
                $list = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => "", 'arrBrands' => ""]);


                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $_POST['arrCategory'], false);


                $catalogCompany = $Panel->LoadCompanies($coupons, $_POST['arrBrands']);
                $catalogType = $Panel->LoadTypes($list,$_POST['arrType']);

                renderFilter([
                    'catalogCategories' => $catalogCategories,
                    'catalogCompany' => $catalogCompany,
                    'catalogType' => $catalogType
                ]);
                return true;

            }


            // Если выбрано все остальное
            $list = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType'], 'arrBrands' => ""]);
            $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $_POST['arrCategory']);
            $catalogType = $Panel->LoadTypes($coupons, $_POST['arrType']);
            $catalogCompany = $Panel->LoadCompanies($list, $_POST['arrBrands']);

            renderFilter([
                'catalogCategories' => $catalogCategories,
                'catalogCompany' => $catalogCompany,
                'catalogType' => $catalogType
            ]);

            $_SESSION['POST'] = $_POST;

            return true;









        }
        // ЕСЛИ ЕСТЬ ЗАПРОС AJAX



	}










}
?>