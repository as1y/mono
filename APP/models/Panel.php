<?php
namespace APP\models;
use APP\core\Mail;
use RedBeanPHP\R;

class Panel extends \APP\core\base\Model {

    public $cliend_id = "kvR0vxe27QCLAyr8imr1ljuPL2yhpD";
    public $client_secret = "WWfPYEd9rcRgFr8MmLNVSE1KFtRB8x";
    public $wID ="1495066";

    public function AuthAdmitad(){


        $url = API."/token/";
        $type = "POST";
        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . base64_encode( $this->cliend_id . ':' . $this->client_secret )
        ];
        $PARAMS = [
            "grant_type" => "client_credentials",
            "client_id" => $this->cliend_id,
            "scope" => "advcampaigns_for_website coupons_for_website deeplink_generator public_data banners_for_website"
        ];
        $PARAMS = http_build_query($PARAMS);


        $result = fCURL($url, [$type => $PARAMS], $headers);

        return $result['access_token'];


    }



    public function WorkWithBanners($token){

        $companies = R::findAll('companies', "ORDER BY rand() LIMIT 20 ", [NULL]);

        foreach ($companies as $key=>$company){
            $banners = $this->loadBanners($token, $company['idadmi']);
            $this->addBannersinBD($banners, $company);
        }



        return true;

    }



    public function addBannersinBD($banners, $company){

        $RS = [];
        $BannersList = [];

        // Берем баннера которые уже есть в БД
        $BannersinBD = R::findAll("banners", "WHERE companies_id = ?" , [$company['id']]);
        foreach ($BannersinBD as $key=>$val){
            $RS[$val['idadmi']] = 1;
        }
        // Берем баннера которые уже есть в БД

                foreach ($banners as $key => $banner){

                    // Берем ID баннеров которые в Адмитаде
                    $BannersList[$banner['id']] = 1;
                    // Берем ID баннеров которые в Адмитаде


                  if (!empty($RS[$banner['id']])) {
                      echo "Баннер уже добавлен".$banner['id']." уже добавлена. <br>";
                        continue;
                 }


                    // Копируем баннер себе
                    $extension = getExtension($banner['banner_image_url']);
                    $picture = '/upload/banners/'.$banner['id'].'banner.'.$extension;
                    file_put_contents(WWW.$picture, file_get_contents($banner['banner_image_url']));
                    // Копируем баннер себе

                    $forma = getsizetypeimage($banner['size_width'], $banner['size_height']);


                    $bannerbd = R::dispense("banners");
                    $bannerbd->idadmi = $banner['id'];
                    $bannerbd->type = $banner['type'];
                    $bannerbd->pictureurl = $banner['banner_image_url'];
                    $bannerbd->direct_link = $banner['direct_link'];
                    $bannerbd->size_width = $banner['size_width'];
                    $bannerbd->size_height = $banner['size_height'];
                    $bannerbd->forma = $forma;
                    $bannerbd->views = 0;

                    $company->ownBannerList[] = $bannerbd;

                    echo "<b>Баннер ".$banner['name']." добавлен </b>  <br>";
                    R::store($company);


                }


        // Если баннер есть в БД, но нет в Адмитаде. То удаляем файл из БД
        foreach ($RS as $key=>$val){
            if (empty($BannersList[$key])) {

                R::trash("banners", $val);
                echo "<font color='red'> Баннер ".$key." есть в БД, но нет в Адмитаде!!! </font> <br>  ";


            }
        }






    }


    public function loadBanners($token, $cid){

        $url = API."/banners/".$cid."/website/".$this->wID."/";
        $type = "GET";
        $limit = 100;

        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token
        );

        $PARAMS = [
            'limit' => $limit,
            'offset' => 0
        ];


        $result = fCURL($url, [$type => $PARAMS], $headers);

        $nadozagruzok = ceil($result['_meta']['count']/$result['_meta']['limit'])-1;

        if ($nadozagruzok == 0)  return $result['results'];


        for ($i = 1; $i <= $nadozagruzok; $i++) {

            $offset = $i*$limit;
            //  echo "Загружаем $i ... $offset<br><hr>";

            $PARAMS = [
                'limit' => $limit,
                'offset' => $offset
            ];
            $add = fCURL($url, [$type => $PARAMS], $headers);

            if( isset( $result['error'] ) && $result['error'] == 'invalid_token' ){
                $token = $this->AuthAdmitad();
                return $this->loadBanners($token);
            }
            $result['results'] = array_merge($result['results'], $add['results']);

        }

        return $result['results'];





    }


    public function getContentCategory($url){
        return R::findOne('category', 'url = ?',[$url]);
    }

    public function getContentShop($url){
        return R::findOne('companies', 'uri = ?',[$url]);
    }


    public function getCompanies($PARAMS){

        if (!empty($PARAMS['custom'])){
            return R::loadAll('companies', $PARAMS['custom']);
        }

        if ($PARAMS['sort'] == "random"){
            $result =  R::findAll('companies', "ORDER BY rand()  LIMIT ".$PARAMS['limit']);
            return $result;
        }

//      $result =  R::findAll('companies', "ORDER BY `".$PARAMS['sort']."` DESC LIMIT ".$PARAMS['limit']);

      $result =  R::findAll('companies', "LIMIT ".$PARAMS['limit']);

        return $result;

    }



    public function LoadallCategories($idcat){
        if (!empty($idcat)) self::$CATEGORYcoupon[$idcat]['select'] = 1;

        return self::$CATEGORYcoupon;
    }

    public function LoadCategoriesSimple($coupons, $idcat){

        foreach ($coupons as $key=>$coupon){
            $masscate = json_decode($coupon['category'],  true);
            foreach ($masscate as $val){
                $categoryARR[$val] = true;
            }
        }


        if (!empty($idcat) && !is_array($idcat))  $categoryARR[$idcat] = "alias";

        // Определение доступных категорий


        // Загрузка описаний категорий
        foreach (self::$CATEGORYcoupon as $key=>$category){
            // Ставим Алисас

        if ( !empty($categoryARR[$key]) && $categoryARR[$key] === "alias") self::$CATEGORYcoupon[$key]['select'] = 1;

            // Убираем категории которых нет в массиве отобранном
            if (!array_key_exists($category['id'], $categoryARR)) unset (self::$CATEGORYcoupon[$key]);

        }


        return self::$CATEGORYcoupon;



    }


    public function LoadAllCompanies($idbrand){

        $compARR = [];
            $companies = R::findAll('companies');

        foreach ($companies as $key=>$company){

            $compARR[$key]['url'] = $company['uri'];
            $compARR[$key]['name'] = $company['name'];
            $compARR[$key]['count'] = $company->countOwn("coupons");
            if ($key == $idbrand) {
                $compARR[$key]['select'] = 1;
                $temp = $compARR[$key];
                unset($compARR[$key]);
                array_unshift ($compARR,$temp );
            };


        }

        return $compARR;
    }

    public function LoadCompanies($coupons, $idbrand){

        $compARR = [];

        foreach ($coupons as $key=>$coupon){
           if (array_key_exists($coupon['companies_id'], $compARR)) {
               $compARR[$coupon['companies_id']]['count']++;
           }
            if (!array_key_exists($coupon['companies_id'], $compARR)){

                if ($coupon->companies->id == $idbrand ) $compARR[$coupon['companies_id']]['select'] = 1;
                $compARR[$coupon['companies_id']]['count'] = 1;
                $compARR[$coupon['companies_id']]['url'] = $coupon->companies->uri;
                $compARR[$coupon['companies_id']]['name'] = $coupon->companies->name;
            }
        }



        return $compARR;

    }

    public function getContentCoupons($PARAMS){

        if ($PARAMS['sort'] == "time"){
            $result =  R::findAll('coupons', "WHERE `dateend` != '' ORDER BY `dateend` ASC  LIMIT ".$PARAMS['limit']);
            return $result;
        }

        if ($PARAMS['sort'] == "used"){
            $result =  R::findAll('coupons', "ORDER BY `".$PARAMS['sort']."` DESC  LIMIT ".$PARAMS['limit']);
            return $result;
        }


    }



    public function getAllCoupons($FILTER = []){


        $SORT = "";


        if ($FILTER['ORDERBY'] && $FILTER['ORDERBY'] == true) $SORT = "ORDER BY `views` DESC";


            if ($FILTER['GET'] && $FILTER['GET']['filter'] == "promocode"){
                return R::findAll('coupons', "WHERE `companyid` = ? AND `species` = ? ".$SORT, [$idcompany, "promocode"]);
            }

        if ($FILTER['GET'] && $FILTER['GET']['filter'] == "action"){
            return R::findAll('coupons', "WHERE `companyid` = ? AND `species` = ? ".$SORT, [$idcompany, "action"]);
        }





        return R::findAll('coupons', "WHERE companyid = ? ".$SORT, [$idcompany]);


    }



    public function getDeepLink($token, $cid, $ulp){


        $url = API."/deeplink/".$this->wID."/advcampaign/".$cid."/";
        $type = "GET";


        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token
        );


        $PARAMS = [
            'ulp' => $ulp,
        ];

        return fCURL($url, [$type => $PARAMS], $headers)[0];


    }




    public function getPrograms($token){
        $url = API."/advcampaigns/website/".$this->wID."/";
        $type = "GET";
        $limit = 100;

        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token
        );

        $PARAMS = [
            'limit' => $limit,
            'offset' => 0
        ];

        $result = fCURL($url, [$type => $PARAMS], $headers);

        if( isset( $result['error'] ) && $result['error'] == 'invalid_token' ){
            $token = $this->AuthAdmitad();
            return $this->getPrograms($token);
        }

        $nadozagruzok = ceil($result['_meta']['count']/$result['_meta']['limit'])-1;

       // echo "Надо добавить еще  ".$nadozagruzok." загрузки <br>";



        if ($nadozagruzok == 0)  return $result['results'];

        // Дозагружаем остальные значения.

        for ($i = 1; $i <= $nadozagruzok; $i++) {

            $offset = $i*$limit;
          //  echo "Загружаем $i ... $offset<br><hr>";

            $PARAMS = [
                'limit' => $limit,
                'offset' => $offset
            ];
            $add = fCURL($url, [$type => $PARAMS], $headers);

            if( isset( $result['error'] ) && $result['error'] == 'invalid_token' ){
                $token = $this->AuthAdmitad();
                return $this->getPrograms($token);
            }
            $result['results'] = array_merge($result['results'], $add['results']);

        }

        return $result['results'];





    }


    public function LoadCustomCupons($ARR) {
        return R::loadAll("coupons", $ARR);
    }


    public function FindIdCategoryCoupon($url) {
        return R::findOne('categorycoupons', 'WHERE url =?', [$url])['id'];
    }

    public function LoadCategoryCoupon($url) {
        return R::findOne('categorycoupons', 'WHERE url =?', [$url])['id'];
    }


    public function FindIdBrandCoupon($url) {

        $mbmass = explode(",", $url);

        if ( count($mbmass) > 1){

            $all = R::findAll('companies');
            foreach ($all as $key=>$value){

                if (in_array ($value['uri'], $mbmass)){
                    unset($all[$key]);
                    $result[] = $value['id'];
                }
            }
            $result = implode(",", $result);
            return $result;

        }

        return R::findOne('companies', 'WHERE `uri` =?', [$url])['id'];

    }


    public function FilterCoupons($ARR) {

        $WHERE = [];

        // Запрос в таблицу coupons
        if (!empty($ARR['arrBrands'])){
            $ARR['arrBrands'] = CheckNumericArr($ARR['arrBrands']);
            $WHERE[] =  "`companies_id` IN (".$ARR['arrBrands'].")";
        }


        if ($ARR['arrType'] == "promocode" || $ARR['arrType'] == "action" ){
                $WHERE[] =  '`species` = "'.$ARR['arrType'].'" ';
        }


        if (!empty($ARR['arrCategory'])){
            $WHERE[] =  'JSON_CONTAINS(`category`, JSON_ARRAY("'.$ARR['arrCategory'].'") )';
        }

        $WHERE = constructWhere($WHERE);

        $result = R::find("coupons", $WHERE);



       return $result;

    }



    public function getCoupons($token, $cid){
        $url = API."/coupons/website/".$this->wID."/";
        $type = "GET";
        $limit = 100;

        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token
        );

        $PARAMS = [
            'limit' => $limit,
            'offset' => 0,
            'campaign' =>$cid
        ];

        $result = fCURL($url, [$type => $PARAMS], $headers);



        if( isset( $result['error'] ) && $result['error'] == 'invalid_token' ){
            $token = $this->AuthAdmitad();
            return $this->getCoupons($token);
        }

        $nadozagruzok = ceil($result['_meta']['count']/$result['_meta']['limit'])-1;

//         echo "Надо добавить еще  ".$nadozagruzok." загрузки <br>";


        if ($nadozagruzok == 0)  return $result['results'];

        // Дозагружаем остальные значения.

        for ($i = 1; $i <= $nadozagruzok; $i++) {

            $offset = $i*$limit;
            //  echo "Загружаем $i ... $offset<br><hr>";

            $PARAMS = [
                'limit' => $limit,
                'offset' => $offset
            ];
            $add = fCURL($url, [$type => $PARAMS], $headers);

            if( isset( $result['error'] ) && $result['error'] == 'invalid_token' ){
                $token = $this->AuthAdmitad();
                return $this->getCoupons($token);
            }
            $result['results'] = array_merge($result['results'], $add['results']);

        }

        return $result['results'];





    }



    public function removeFinishCoupon(){

        $allCoupons = R::findAll('coupons');

//        show($allCoupons);

        foreach ($allCoupons as $key=>$val){

            if (!$val['dateend']) continue;

            if  ( getOstatok($val['dateend']) < 0 ) {
                echo "Купон id ".$val['id']." удален т.к. уже просрочен! <br>";
                R::trash($allCoupons[$key]);

            }




         }

        return true;


    }



//    public function AddCouponsinBD($coupons, $companies){
//
//
//    }


    public function addCoupons($token){

        $companies = R::findAll('companies');
        //Смотрим все компании

        foreach ($companies as $key=>$company){

            // Получаем список купонов
            $coupons = $this->getCoupons($token, $company['idadmi']);

            echo "<h1>КУПОНЫ ДЛЯ ".$company['name']."</h1>";

                 foreach ($coupons as $k=>$val){

                     $categories =  extractcategoriesCoupons($val['categories']);
                     $categories = $this->workcategoriesCoupons($categories);
                     $categories = json_encode($categories, true);

                     $nalichie = R::count("coupons", "WHERE idadmi = ?" , [$val['id']]);

                     if ($nalichie > 0) {
                         echo "Купон ".$val['name']." уже добавлен! <br>";
                         continue;
                     }


                     $framset = (!empty($val['frameset_link'])) ?  $val['frameset_link'] : "";

                     $types = json_encode($val['types'], true);

                     $coupon = R::dispense("coupons");
                     $coupon->idadmi = $val['id'];
                     $coupon->name = $val['name'];
                     $coupon->description = $val['description'];
                     $coupon->category = $categories;
                     $coupon->short_name = $val['short_name'];
                     $coupon->used = 0;
                     $coupon->species = $val['species'];
                     $coupon->datestart = $val['date_start'];
                     $coupon->dateend = $val['date_end'];
                     $coupon->types = $types;
                     $coupon->discount = $val['discount'];
                     $coupon->promocode = $val['promocode'];
                     $coupon->gotolink = $val['goto_link'];
                     $coupon->framset = $framset;
                     $coupon->status = $val['status'];

                     $company->ownCouponList[] = $coupon;

                     echo "<b>Купон ".$val['name']." добавлен </b>  <br>";
                     R::store($company);


                 }

            // Получаем список купонов



        }










        return true;

    }

    public function addMagazin($admicompanies, $token){

        $RS = [];
        $allShops = R::findAll('companies');

        // Записываем IDшники магазинов которые уже есть в БД
        foreach ($allShops as $key=>$val){
            $RS[$val['idadmi']] = 1;
        }


        foreach ($admicompanies as $key=>$val){
            // Проверяем наличие магазина в БД
            if (!empty($RS[$val['id']])) {
                echo "Партнерская программа ".$val['name']." уже добавлена. <br>";
                continue;
            }
            if ($val['status'] != "active") continue;


            //Забираем себе лого
            $extension = getExtension($val['image']);
            $logo = '/upload/logos/'.$val['id'].'logo.'.$extension;
            file_put_contents(WWW.$logo, file_get_contents($val['image']));

            // Работа с категориями
            $categories =  extractcategories($val['categories']);
            $categories = $this->workcategories($categories);
            $categories = json_encode($categories, true);
            // Работа с категориями

            $val['name'] = str_replace("RU", "", $val['name']);
            $val['name'] = str_replace("WW", "", $val['name']);

            $deeplink = $this->getDeepLink($token, $val['id'], $val['site_url']);


            $DATA = [
                'idadmi' => $val['id'],
                'name' => $val['name'],
                'url' => $val['site_url'],
                'ulp' => $deeplink,
                'uri' => translit_sef($val['name']),
                'ecpc' => $val['ecpc'],
                'category' => $categories,
                'logo' => $logo,
                'description' => "",
                'status' => $val['status'],
            ];

            $this->addnewBD("companies", $DATA);

            echo "Добавлена партнерская программа <b>".$val['name']."</b> !";


        }







        return true;

    }


    public function workcategoriesCoupons($cat){

        $categoryarray = [];

        foreach ($cat as $key => $val){

            $categoriya = R::findOne("categorycoupons", "WHERE name = ?" , [$val]);

            if (!empty($categoriya)) {
                $categoriya->count = $categoriya->count +1;
                $categoryarray[] = $categoriya->id;
                R::store($categoriya);
            }

            if (empty($categoriya)){
                $url = translit_sef($val);
                $DATA = [
                    'name' => $val,
                    'url' => $url,
                    'description' => "",
                    'count' => 1,
                    'countview' => 1,
                ];
                $categoryarray[] =  $this->addnewBD("categorycoupons", $DATA);
            }



        }


        return $categoryarray;

    }




    public function workcategories($cat){

        $categoryarray = [];

        foreach ($cat as $key => $val){

            $categoriya = R::findOne("category", "WHERE name = ?" , [$val]);

            if (!empty($categoriya)) {
                $categoriya->countshop = $categoriya->countshop +1;
                $categoryarray[] = $categoriya->id;
                R::store($categoriya);
            }

            if (empty($categoriya)){
                $url = translit_sef($val);
                $DATA = [
                    'name' => $val,
                    'url' => $url,
                    'description' => "",
                    'countshop' => 1,
                    'countview' => 1,
                ];
                $categoryarray[] =  $this->addnewBD("category", $DATA);
            }



        }


        return $categoryarray;

    }

    public function getCategories($token, $id = ""){

        if (empty($id))    $url = API."/categories/";
        if (!empty($id)) $url = API."/categories/advcampaign/".$id."/";
        $type = "GET";

        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token
        );


        $PARAMS = [];

        $result = fCURL($url, [$type => $PARAMS], $headers);

        return $result;

    }

    public function countCounpons($coupons, $idcompany)
    {


        $promocode =   R::count("coupons", "WHERE `species` = ? AND `companyid` =?  ", ["promocode", $idcompany]);
        $action =   R::count("coupons", "WHERE `species` = ? AND `companyid` =?", ["action", $idcompany]);


        $count['promocode'] = $promocode;
        $count['action'] = $action;

        return $count;

    }

    public function getGotoUrl($id)
    {

        $coupon = R::findOne("coupons", "WHERE id = ?" , [$id]);

        if ($coupon)  {
            $coupon->used = $coupon + 1;
            R::store($coupon);
            redir($coupon['gotolink']);

        }



      if (!$coupon)   redir("/");




    }


}
?>