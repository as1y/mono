<?php
namespace APP\models;
use APP\core\Mail;
use RedBeanPHP\R;

class Panel extends \APP\core\base\Model {

    public $wID ="1495066";


    public function WorkWithBanners($token){

        $companies = R::findAll('companies', "WHERE `addbanner` = ? LIMIT 40 ", ["0"]);

        show($companies);

        if (!empty($companies)){

            foreach ($companies as $key=>$company){
                $banners = $this->loadBanners($token, $company['idadmi']);
                $this->addBannersinBD($banners, $company);
            }

            echo "<h1><font color='red'>Загружены не все баннера. Включите скрипт еще раз</font></h1>";

        }








        return true;

    }

    public function SendCouponEmail($DATA){


            $DATA = [
                'email' => $DATA['email'],
                'idcoupon' => $DATA['idcoupon'],
            ];

            $this->addnewBD("sendcoupons", $DATA);



            return  R::Load('coupons', $DATA['idcoupon']);



    }


    public function SubscribeFooter($email){

        // Отсекаем дубли
        $dubl = R::findOne("subscribe", "WHERE email = ?" , [$email]);
        if (!empty($dubl)) return true;

        $DATA = [
            'email' => $email,
            'type' => "footer"
        ];

        $this->addnewBD("subscribe", $DATA);

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

            if ($banner['type'] == "html5") continue;
            if ($banner['type'] == "flash") continue;


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

            $company->addbanner = 1;

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
        $limit = 200;

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


    public static function loadOneCoupon($id){
        return R::Load('coupons', $id);
    }

    public function LoadallCategories($idcat, $type = ""){

        if (!empty($idcat)) self::$CATEGORYcoupon[$idcat]['select'] = 1;

        return self::$CATEGORYcoupon;
    }

    public function LoadCategoriesSimple($coupons, $idcat, $sizeoff = true){


        // Берем список категорий изходя из купонов
        foreach ($coupons as $key=>$coupon) {
            // СОВМЕСТИТЬ КАТЕГОРИИ
            $categories = json_decode($coupon['category'], true);
//                    echo "ID купона ".$coupon['id']." Компания  ".$coupon['companies_id']." ||| ";
            foreach ($categories as $v) {
                $tempARR[$coupon['companies_id']][$v] = true;
            }
        }





        // Получаем массив для работы
        foreach ($tempARR as $k=>$v){
            foreach ($v as $b=>$c){
                $filtrArr[$b] = true;
            }
        }




        // Совмещаем если выбрано несколько брендов
        if ( $sizeoff == true){

                    $filtrArr = current($tempARR);


                    foreach ($tempARR as $k=>$value){

//                        echo "first---";
//                        show($filtrArr);
//                        echo "val---";
//                        show($value);

//                         Функция работы схождения массивов
                        $filtrArr =  array_intersect_key($filtrArr, $value);

//                        echo "itog---";
//                        show($filtrArr);

                    }
                }



        $ALLCATEGORIES = [];
        foreach ($filtrArr as $category=>$val){
            $ALLCATEGORIES[$category] = "ok";
            if (!empty($idcat) && $category == $idcat) $ALLCATEGORIES[$category] = "alias";

        }


        // МАССИВ КАТЕГОРИЙ
        foreach (self::$CATEGORYcoupon as $key=>$category){
            // Ставим Алисас
            if ( !empty($ALLCATEGORIES[$category['id']]) && $ALLCATEGORIES[$category['id']] === "alias" ) {
                self::$CATEGORYcoupon[$key]['select'] = 1;
            }
            // Убираем категории которых нет в массиве отобранном
            if (!array_key_exists($category['id'], $ALLCATEGORIES)) unset (self::$CATEGORYcoupon[$key]);
        }


        return self::$CATEGORYcoupon;






        return $ALLCATEGORIES;







    }


    public function LoadAddInfo(){


        $ADDINFO['source'] = [1 => "googlecpc"];
        $ADDINFO['companies'] =  $this->LoadAllCompanies();


       return $ADDINFO;

    }


    public function LoadAllCompanies(){

        $ARR = R::findAll('companies');

        foreach ($ARR as $k=>$v){

            if ($v->countOwn("coupons") == 0) unset($ARR[$k]);
        }

        return $ARR;

    }


    public function LoadTypes($coupons, $arrType = ""){

        $typeARR['action'] = 0;
        $typeARR['promocode']= 0;
        $typeARR['all'] = 0;

        foreach ($coupons as $key=>$coupon){
            if ($coupon['species'] == "action" ) $typeARR['action']++;
            if ($coupon['species'] == "promocode" ) $typeARR['promocode']++;
            $typeARR['all']++;
            $typeARR['select'] = $arrType;

        }

        return $typeARR;

    }




    public function LoadCompanies($coupons, $idbrand){

        // Показывать все бренды в категории
        // Выбрать все купоны где категория наша категория
        // Записать и посчитать

        $compARR = [];
        $idbrand = explode(",", $idbrand);

        foreach ($coupons as $key=>$coupon){

            if (array_key_exists($coupon['companies_id'], $compARR)) {
                $compARR[$coupon['companies_id']]['count']++;
            }

            if (!array_key_exists($coupon['companies_id'], $compARR)){

                $compARR[$coupon['companies_id']]['count'] = 1;
                $compARR[$coupon['companies_id']]['url'] = $coupon->companies->uri;
                $compARR[$coupon['companies_id']]['name'] = $coupon->companies->name;

                if (in_array($coupon->companies->id, $idbrand) ) {
                    $compARR[$coupon['companies_id']]['select'] = 1;
                    // Перекидываем в начало массива

                }



            }


        }




//        echo "ИСХОДНЫЙ МАССИВ!!";
//        show($compARR);


        $compARR = array_values($compARR);
        //Поднимаем выделенные бренды на верх
        foreach ($compARR as $key=>$val){

                if (!empty($val['select']) &&  $val['select'] == true) {

//                    echo "=== НАЧАЛО ИТЕРАЦИИ $key";
//                    show($compARR);

                    unset($compARR[$key]);

                    array_unshift($compARR, $val);


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


    public function getRandomPassage(){

        $text = "Рандомный кусок текста для вставки в объявление";


        return $text;
    }

    public function GeneratetextAds($DATA){

//        show($DATA['company']);

        $coupons = $this->getAllCoupons($DATA['company']);

        $keywordmass = explode("\n", $DATA['keywords']);

        $randomtext = $this->getRandomPassage();

        for ($i = 0; $i < count($keywordmass)-1; $i++) {

            foreach ($coupons as $coupon){
                $dlinnastroki = strlen($coupon['name']);
                $discount = textdiscount($coupon['discount']);
                $OBJAVA['keyword'] = $keywordmass[$i];
                $OBJAVA['zagolovok'] = $keywordmass[$i]." ".trim($discount);

                // Создание текста объявления
                $OBJAVA['text'] = $coupon['name'];
                // Создание текста объявления

                $ADS[] = $OBJAVA;
            }

        }






         return $ADS;

    }

    public function GenerateKeyWords($idcompany){


        $company = R::Load('companies', $idcompany);

        $company = ucfirst($company['name']);

        $company = str_replace(".ru", "", $company);


        $symbols = "lat";
        if (preg_match('/[a-z]/i',$company)) { $symbols = "lat"; } else { $symbols = "kyr"; }


        $translit = mb_strtoupper(translit_sef($company));

        if ($symbols == "lat") $translit = translitengrus($company);

        // Транслит с русского на английский

        // Транслит с английсского на русский


        $keywords = $company." промокод\n";
        $keywords .= "Промокод ".$company."\n";
        $keywords .= $translit." промокод\n";
        $keywords .= "Промокод ".$translit."\n";
        $keywords .= $company." купон\n";
        $keywords .= "Купон ".$company."\n";
        $keywords .= $translit." купон\n";
        $keywords .= "Купон ".$translit."\n";




        return $keywords;



    }



    public function getAllCoupons($idcompany, $FILTER = ""){


        $SORT = "";

        if ($FILTER == "ORDERBY") $SORT = "ORDER BY `views` DESC";


        return R::findAll('coupons', "WHERE companies_id = ? ".$SORT, [$idcompany]);


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

        if (!empty($ARR['searchQuery'])){


            // Добавляем запрос в БД
            $DATA = [
                'zapros' => $ARR['searchQuery'],
            ];
            $this->addnewBD("zaprosi",$DATA);

            $result = R::findLike("companies", ['name' => [$ARR['searchQuery']]]);

            $FINALcoupons = [];

            if (!empty($result)){

                foreach ($result as $key=>$val){
                    $FINALcoupons = $FINALcoupons + $val->ownCouponsList;
                }
                return $FINALcoupons;
            }

            $result = R::findLike("companies", ['name' => [translit_sef($ARR['searchQuery'])]]);

            if (!empty($result)){
                foreach ($result as $key=>$val){
                    $FINALcoupons = $FINALcoupons + $val->ownCouponsList;
                }
                return $FINALcoupons;
            }

            $result = R::findLike("coupons", ['name' => [ $ARR['searchQuery'] ]]);

            if (!empty($result)) return $result;




            return false;
        }



        // Запрос в таблицу coupons
        if (!empty($ARR['arrBrands'])){
            $WHERE[] =  "`companies_id` IN (".$ARR['arrBrands'].")";
        }


        if ($ARR['arrType'] == "promocode" || $ARR['arrType'] == "action" ){
            $WHERE[] =  '`species` = "'.$ARR['arrType'].'" ';
        }


        if (!empty($ARR['arrCategory'])){
            $WHERE[] =  'JSON_CONTAINS(`category`, JSON_ARRAY("'.$ARR['arrCategory'].'") )';
        }

        $WHERE = constructWhere($WHERE);

        // Добавляем сортировку
        $WHERE .= "ORDER BY `used` DESC";


        $result = R::find("coupons", $WHERE);



        return $result;

    }



    public function getCoupons($token, $cid){
        $url = API."/coupons/website/".$this->wID."/";
        $type = "GET";
        $limit = 300;

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

        //Удаляем таблицу категории купонов

        R::wipe('categorycoupons');

        $companies = R::findAll('companies');
        //Смотрим все компании

//        $i=0;

        foreach ($companies as $key=>$company){

//            $i++;
//            if ($i == 10) continue;

            // Получаем список купонов
            $coupons = $this->getCoupons($token, $company['idadmi']);


            foreach ($coupons as $k=>$val){


//                echo "<h1>КУПОНЫ ДЛЯ ".$company['name']."</h1><br>";
//                echo "ID компании ".$company['id']." | ID компании в admi ".$company['idadmi']." <br>";
//                echo "ID купона компании ".$val['campaign']['id'];
//
//                if ($company['idadmi'] != $val['campaign']['id']) echo "<br><font color='#8b0000'>11111</font>";



                $categories =  extractcategoriesCoupons($val['categories']);

                $categories = $this->workcategoriesCoupons($categories);
                $categories = json_encode($categories);



                // Загрузка базовых параметров
                $framset = (!empty($val['frameset_link'])) ?  $val['frameset_link'] : $val['goto_link'];
                $types = json_encode($val['types'], true);
                $framset = str_ireplace("http", "https", $framset);
                // Загрузка базовых параметров


                $coupon = R::findOne("coupons", "WHERE idadmi = ?" , [$val['id']]);
                if (!empty($coupon)){
                    echo "Купон ".$val['name']." уже добавлен! Но мы его обновим! <br>";
                    $coupon->idadmi = $val['id'];
                    $coupon->name = $val['name'];
                    $coupon->description = $val['description'];
                    $coupon->category = $categories;
                    $coupon->short_name = $val['short_name'];
                    $coupon->species = $val['species'];
                    $coupon->dateend = $val['date_end'];
                    $coupon->types = $types;
                    $coupon->discount = $val['discount'];
                    $coupon->promocode = $val['promocode'];
                    $coupon->gotolink = $val['goto_link'];
                    $coupon->idamicompany = $val['campaign']['id'];
                    $coupon->framset = $framset;
                    $coupon->status = $val['status'];
                    R::store($coupon);

                    continue;
                }




                // Добавление
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
                $coupon->idamicompany = $val['campaign']['id'];
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



    function RedirCoupon($coupon){



        $coupon =  R::Load('coupons', $_GET['coupon']);

        if (!empty($coupon)){
            $coupon->used = $coupon->used +1;
            R::store($coupon);

            // Отправка ПОСТБЕКА
            // subid1 = couponID
            // subid2 = uniqID наш
            // subid4 = subID google

            $link = $coupon['gotolink']."&subid1=".$coupon['id']."&subid2=".$_SESSION['SystemUserId']."&subid4=".gaUserId();
            // Отправка ПОСТБЕКА

            redir($link);
        }

        return true;


    }



    public function updatestatus(){

     return R::findAll("updatestatus");

    }

    public function updatecheck($type){

            $zapis = R::findOne("updatestatus", "WHERE type = ?" , [$type]);

            if (!empty($zapis)){
                $zapis->date = date("Y-m-d H:i:s");
                R::store($zapis);
            }else{
                $DATA = [
                    'type' => $type,
                    'date' => date("Y-m-d H:i:s"),
                ];
                $this->addnewBD("updatestatus", $DATA);

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
            if ($val['connection_status'] != "active") continue;


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
            $val['name'] = str_replace("[CPS]", "", $val['name']);




//            $deeplink = $this->getDeepLink($token, $val['id'], $val['site_url']);
//            if (empty($deeplink)) $deeplink = "";
        $deeplink = $val['gotolink'];


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
                'addbanner' => 0,
            ];

            $this->addnewBD("companies", $DATA);

//            echo "Добавлена партнерская программа <b>".$val['name']."</b> !";


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

    public function AddUtminBD($DATA)
    {


        $UTM = [
            'utm_source' => "",
            'utm_medium' => "",
            'utm_campaign' => "",
            'utm_content' => "",
            'utm_term' => "",
        ];

        foreach ($UTM as $key=>$value){

            if (!empty($DATA[$key])) $UTM[$key] = $DATA[$key];
        }

        $UTM['sysuserid'] = $_SESSION['SystemUserId'];
        $UTM['date'] = date("Y-m-d H:i:s");




        $this->addnewBD("usertoday", $UTM);



        return $UTM;



    }



    public function Getlastconversion(){
        return R::findALL("conversion", "ORDER BY `id` DESC LIMIT 50");
    }



    public function getUTM($uid)
    {
        $UTM = R::findOne("usertoday", "WHERE sysuserid = ?" , [$uid]);

        return $UTM;

    }

    public function SendGoogleTransaction($coupon, $DATA)
    {


        $url = "http://www.google-analytics.com/collect";
        $type = "GET";

        $company = $coupon->companies['name'];


        $PARAMS = [
            'v' => 1,
            't' => 'pageview',
            'tid' => CONFIG['UA'],
            'cid' => $DATA['subid4'],
            'dp' => 'postbackconvert',
            'ti'=> $coupon['name'],
            'ta' => $company,
            'tr'=> $DATA['payment_sum'],
            'pa'=> 'purchase',
            'pr1id'=> 'Admi',
            'pr1nm'=> $DATA['offer_name'],

        ];

        $result = fCURL($url, [$type => $PARAMS]);


        return $result;

    }


}
?>