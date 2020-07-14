<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class CouponsController extends AppController {


	public function indexAction(){

        $Panel = new Panel();

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

            // Бренд/Категория
            //brand/category
            if (empty($this->route['alias2'])) $this->route['alias2'] = "";

            // ЗАБОР АЛИАСОВ
                $idbrand = $Panel->FindIdBrandCoupon($this->route['alias']);
                $idcat = $Panel->FindIdCategoryCoupon($this->route['alias2']);
            // ЗАБОР АЛИАСОВ

            if (empty($idbrand) && $this->route['alias'] != "vse") redir("/coupons/vse/");

            //if (empty($idcat) && $this->route['alias'] != "vse") redir("/coupons/vse/");


            // Отбираем купоны
            $coupons = $Panel->FilterCoupons(['arrCategory' => $idcat, 'arrType' => "", 'arrBrands' => $idbrand]);



            // Загружаем отображаемые категории в зависимости от алисасов
            if (empty($idbrand)){
                // Если бренд не отмечен, то загружаем все категории
                $catalogCategories = $Panel->LoadallCategories($idcat);
            }else{
                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $idcat);
            }
            // Загружаем отображаемые категории в зависимости от алисасов


            // Загружаем самм компании
            if (empty($idcat)){
                // Если категория не отмечена, то загружаем все компании
                 $catalogCompany = $Panel->LoadAllCompanies($idbrand);
            }else{
                $catalogCompany = $Panel->LoadCompanies($coupons, $idbrand);
            }
            // Если указанна категория, то какие загружаем компании


            $this->set(compact( 'coupons', 'catalogCompany', 'catalogCategories'));

        }
        // Если запрос напрямую


        // ЗАПРОС AJAX НА ГЕНЕРАЦИЮ КОНТЕНТА
        if($this->isAjax()){
            $this->layaout = false;


            // Преобразование Алиаса категории в ID
            if (!empty($_POST['arrCategory'])) $_POST['arrCategory'] = $Panel->FindIdCategoryCoupon($_POST['arrCategory']);
            if (!empty($_POST['arrBrands'])) $_POST['arrBrands'] = $Panel->FindIdBrandCoupon($_POST['arrBrands']);

            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType'], 'arrBrands' => $_POST['arrBrands']]);

            if (!empty($_POST['arrCount']) && $_POST['arrCount'] == 1){

                show($_POST);
                
                $ALLCATEGORIES = [];

                foreach ($coupons as $key=>$coupon){

                    $categories = json_decode($coupon['category'], true);

                    foreach ($categories as $key=>$category){
                        $ALLCATEGORIES[$category] = "ok";
                        if (!empty($_POST['arrCategory']) && $category == $_POST['arrCategory']) $ALLCATEGORIES[$category] = "alias";

                    }
                }

                // получаем массив с категориями

                echo  json_encode($ALLCATEGORIES);

//                $catalogCategories = $Panel->LoadCategoriesSimple($coupons, $ALLCATEGORIES);
//                renderCategory($catalogCategories);

                exit();

            }



            $coupons = $Panel->FilterCoupons(['arrCategory' => $_POST['arrCategory'], 'arrType' => $_POST['arrType'], 'arrBrands' => $_POST['arrBrands']]);
            generetuCouponinCode($coupons);


        }
        // ЕСЛИ ЕСТЬ ЗАПРОС AJAX



	}










}
?>