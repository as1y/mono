<?php


function extractcategoriesCoupons($categories){
    $result = [];
    foreach ($categories as $key=>$val) $result[] = $val['name'];
    return $result;
}

function extractcategories($categories){

    $result = [];

foreach ($categories as $key=>$val){

    if (!empty($val['parent'])) $result[] = $val['name'];

}

return $result;


}



function generateResult($coupons, $PAGESLIST, $catalogCategories,  $query ="", $catalogCompany = []){

    // Если ЧТО-ТО ПОШЛО НЕ ТАК
    if ($coupons === false){
        echo "<h5>По вашему запросу ничего не найдено!<br> Попробуйте восползоваться умным фильтром промокодов<br></h5>  

<a class='btn px-4 btn-primary-dark-w py-2 rounded-lg' href='/promocode/vse'>ПЕРЕЙТИ</a>";
        return false;

    }
    // Если ЧТО-ТО ПОШЛО НЕ ТАК


    // СБРАСЫВАЕМ ИНДЕКСЫ И НАЧИНАЕМ С 1
    $coupons =  array_values($coupons);
    array_unshift($coupons, NULL);
    unset($coupons[0]);

    // Всего купонов
    $allcoupons = count($coupons);
    // Всего страниц
    $Pages = ceil(($allcoupons/$PAGESLIST['CouponsPerPage'] ));



?>

    <div class=" flex-center-between mb-3">
        <h1 class="font-size-25 mb-2 mb-md-0">
            <?php

            if ($catalogCategories == "search"){
                $zagolovokCategory = 'Результаты поиска по запросу:  '.' <b>"'.$query.'"</b> ';
                echo '<input type="hidden" value = "'.$query.'" id="search" >';
            }else{
                $zagolovokCategory = "Умный фильтр промокодов и скидок!";

                foreach ($catalogCategories as $key=>$val) :
                    if ( $val['select'] )  $zagolovokCategory = $val['name']." - промокоды и скидки";
                endforeach;

                $i=0;
                foreach ($catalogCompany as $key=>$val) :
                    if ($i == 1) continue;
                    if (!empty($val['select']) && $val['select']==1 )  $zagolovokCategory .= " в магазине ".$val['name'];
                    $i++;
                endforeach;


            }

            echo  $zagolovokCategory;

            ?>
        </h1>
        <p class="font-size-14 text-gray-90 mb-0 d-none d-sm-block">Найдено купонов: <b><?=$allcoupons?></b></p>
    </div>
    <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
        <div class="px-3">
            <span class="d-lg-none .d-xl-block">   Найдено: <b><?=$allcoupons?></b></span>
            <a href="/promocode/vse/" class="btn px-4 btn-primary-dark-w py-2 rounded-lg d-none d-sm-block">СБРОСИТЬ ФИЛЬТР</a>
        </div>
        <div class="d-flex ">

        </div>
        <nav class="px-3 flex-horizontal-center text-gray-20 ">
            <?php if ($catalogCategories != "search" && $PAGESLIST['ViewPage'] > 1):?>
                <a class="text-gray-30 font-size-20 ml-2" href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']-1)?>)">←</a>
            <?php endif;?>

            <?php if ($catalogCategories == "search"):?>
                <a class="text-gray-30 font-size-20 ml-2" href="#" onclick="changePageSearch(<?=($PAGESLIST['ViewPage']-1)?>)">→</a>
            <?php endif; ?>

            &nbsp;
            Страница <?=$PAGESLIST['ViewPage']?> из &nbsp; <b><?=$Pages?></b>
            <?php if ($catalogCategories != "search" && $PAGESLIST['ViewPage'] < $Pages):?>
                <a class="text-gray-30 font-size-20 ml-2" href="#" onclick="changePage(<?=($PAGESLIST['ViewPage']+1)?>)">→</a>
          <?php endif;?>

    <?php if ($catalogCategories == "search" && $PAGESLIST['ViewPage'] < $Pages):?>
        <a class="text-gray-30 font-size-20 ml-2" href="#" onclick="changePageSearch(<?=($PAGESLIST['ViewPage']+1)?>)">→</a>
        <?php endif; ?>

        </nav>
    </div>
    <!-- Shop Body -->



    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
            <ul class="row list-unstyled products-group no-gutters">


                <?=generetuCouponinCode($coupons, $PAGESLIST['ViewPage'], $PAGESLIST['CouponsPerPage'])?>

            </ul>
        </div>



    </div>
    <!-- End Tab Content -->
    <!-- End Shop Body -->
    <!-- Shop Pagination -->


    <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
        <div class="text-center text-md-left mb-3 mb-md-0">Всего купонов: <b><?=$allcoupons?></b> | Страница <?=$PAGESLIST['ViewPage']?> из &nbsp; <b><?=$Pages?></b></div>

        <?php
        $starpage = generateStartEndPage($PAGESLIST, $Pages)['starpage'];
        $endpage = generateStartEndPage($PAGESLIST, $Pages)['endpage'];
       // require_once( 'includes/bootstrapnav.php' );

        ?>



        <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">

            <?php if ($PAGESLIST['ViewPage'] >= 5): ?>
                <li  class="page-item"><a class="page-link"  onclick="changePage(1)">1</a></li>
                <li >←</li>
            <?php endif;?>

            <?php for ($page=$starpage; $page <= $endpage; $page++) : ?>

        <?php if ($catalogCategories != "search"):?>
                    <li  class="page-item"><a class="page-link <?= ($page == $PAGESLIST['ViewPage']) ? "current" : "" ?>"   onclick="changePage(<?=$page?>)"><?=$page?></a></li>
        <?php endif;?>

            <?php endfor;?>


            <?php if ($Pages >= 5 && $PAGESLIST['ViewPage'] <= ($Pages - 5) ) : ?>
                <li >→</li>
                <li  class="page-item"><a class="page-link"   onclick="changePage(<?=$Pages?>)"><?=$Pages?></a></li>
            <?php endif;?>




        </ul>
    </nav>
    <!-- End Shop Pagination -->


<?php




}



function generateStartEndPage($PAGESLIST, $Pages){

    $starpage = 1;
    $endpage = ($Pages >= '5') ? "5" : $Pages;
    // Если больше стандартный пяти
    if ($PAGESLIST['ViewPage'] >= 5){
        $starpage = $PAGESLIST['ViewPage'] - 2;
        $endpage = $PAGESLIST['ViewPage'] + 2;
        if ($starpage < 1) $starpage = 1;
        if ($endpage > $Pages) $endpage = $Pages;
    }

    $result['starpage'] = $starpage;
    $result['endpage'] = $endpage;

    return $result;

}



function generetuCouponinCode($coupons, $ViewPage, $CouponsPerPage){

    $start = ($ViewPage * $CouponsPerPage) - ($CouponsPerPage - 1) ;
    $end = $ViewPage * $CouponsPerPage;

    for ($key = $start; $key <= $end; $key++) {
        if (empty($coupons[$key])) continue;

        echo '<li class="col-6 col-md-3 col-wd-2gdot4 product-item">';
        renderCoupon($coupons[$key]);
        echo  ' </li>';

    }




}



function renderFilter($DATA){


    ?>
<!--    КАТЕГОРИИ-->
    <div class="border-bottom pb-4 mb-4">
        <h4 class="font-size-14 mb-3 font-weight-bold">ФИЛЬТР ПО КАТЕГОРИИ</h4>
        <div class="form-group">
            <select id = "CategoryContainer" onchange="ChangeFilter()" name="category" class="form-control"   >
                <?=renderCategory($DATA['catalogCategories'])?>
            </select>
        </div>
    </div>
<!--    БРЕНД-->
    <div class="border-bottom pb-4 mb-4">
        <h4 class="font-size-14 mb-3 font-weight-bold">ФИЛЬТР ПО БРЕНДУ</h4>
        <div style=" height:300px; overflow:auto; padding-left: 0.5rem !important; border:solid 1px #818181;">
            <?=renderBrands($DATA['catalogCompany'])?>
        </div>
    </div>
<!--    ТИП-->
    <div class="border-bottom pb-4 mb-4">
        <h4 class="font-size-14 mb-3 font-weight-bold">ТИП СКИДКИ</h4>
        <div class="form-group">
            <select onchange="ChangeFilter()" name="type" class="form-control" >
                <?=renderType($DATA['catalogType'])?>
            </select>
        </div>
    </div>
    <a href="/promocode/vse/" class="btn px-4 btn-primary-dark-w py-2 rounded-lg ">СБРОСИТЬ ФИЛЬТР</a>

    <?php



    return true;

}


function textdiscount($discount){

    if($discount == "1%") $discount = NULL;

    if (empty($discount))   $caption = 'на скидку';

    if (!empty($discount))   $caption = $discount;

    return $caption;



}

function captiondiscount($discount){


    if($discount == "1%") $discount = NULL;

    if (empty($discount))   $caption = '<i class="fa fa-check-circle"> </i>';

    if (!empty($discount))   $caption = '<i class="fa fa-gift"> '.$discount.'</i>';

    return $caption;

}

function constructWhere($ARR){

    if (empty($ARR)) return "";

    if (count($ARR) == 1) return "WHERE ".$ARR[0]."";

    $WHERE = "WHERE ".$ARR[0];
    for ($key = 1; $key < count($ARR); $key++) {
        $WHERE .= " AND ".$ARR[$key];
    }

    return $WHERE;

}







function ConvertRUB($value, $cur){


    //          echo ConvertRUB(10, "USD");

    $url = "https://www.cbr-xml-daily.ru/latest.js";
    $rates = fCURL($url)['rates'];

    $result = $value/$rates[$cur];

    $result =  round($result, 2);


return $result;


}


function popUPcoupon (){

     if (!empty($_COOKIE['runmodal'])) $couponmodal =\APP\models\Panel::loadOneCoupon($_COOKIE['runmodal']);
      ?>

        <script>
            function copytext() {
                /* Get the text field */
                var copyText = document.getElementById("myInput");

                /* Select the text field */
                copyText.select();

                /* Copy the text inside the text field */
                document.execCommand("copy");

            }
        </script>

        <!-- Modal -->
        <div class="modal fade" id="couponmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header  ">
                        <br>
                        <img src="<?=$couponmodal->companies['logo']?>">




                        <div class="d-none d-sm-block">
                            <h5 class="modal-title text-left" id="exampleModalLabel">&nbsp;&nbsp;<?=captiondiscount($couponmodal['discount'])?> <?=json_decode($couponmodal['types'], true)[0]['name']?></h5>

                        </div>


                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>


                    <div class="modal-body text-center" id="modalbody">
                        <font color="#df3737">Для Вашего удобства сайт магазина уже открыт в соседней вкладке.</font>
<hr>

                        <?php if (!empty($couponmodal['short_name'])):?>
                            <span  class="font-size-12 "><?=obrezanie($couponmodal['short_name'], 350)?><br><br></span>
                        <?php endif; ?>



                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-2"></div>
                                <div class="col-md-8 ">

                                    <?php if ($couponmodal['species'] == "promocode"):?>
                                        <div class="form-group">
                                            <input type="text" style="border-radius: unset" onclick="copytext()" class="form-control px-4 text-center"  value="<?=$couponmodal['promocode']?>"  id="myInput" >
                                        </div>
                                        <button type="button"  onclick="copytext()" class="btn btn-warning">СКОПИРОВАТЬ ПРОМОКОД</button>
                                    <?php endif;?>

                                    <?php if ($couponmodal['species'] == "action"):?>
                                        <div class="form-group">
                                            <input type="text" style="border-radius: unset"  class="form-control px-4 text-center"  value="УЖЕ АКТИВИРОВАН"  id="myInput" >
                                        </div>
                                        <a type="button" href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$couponmodal['id']?>"  target="_blank" class="btn btn-warning">ОТКРЫТЬ САЙТ В НОВОЙ ВКЛАДКЕ</a>
                                    <?php endif;?>


                                </div>
                                <div class="col-md-2"></div>
                            </div>

                        </div>


                        <span class="font-size-12 ">Не готовы покупать в магазине прямо сейчас? <br>
              Мы отправим промокод на e-mail чтобы не потерять!</span>
                        <br>


                        <form onsubmit="subscribecode(<?=$couponmodal['id']?>); return false">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="input-group input-group-pill">
                                        <input type="email" class="form-control border-0 height-40" name="emailcode" id="subscribeSrEmail" placeholder="Введите E-mail" aria-label="Email address" aria-describedby="subscribeButton" required="" data-msg="Please enter a valid email address.">

                                        <div class="input-group-append">
                                            <button type="submit"  class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">ОТПРАВИТЬ</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
<?php
}






function renderType($catalogType){
?>

    <option value="" >ВСЕ ТИПЫ</option>

    <?php if (!empty($catalogType['action'])) :?>
        <option value="action" <?= ($catalogType['select'] == "action") ? "selected" : "" ?>  >Только скидки - (<?=$catalogType['action']?>)</option>
    <?php endif;?>

    <?php if (!empty($catalogType['promocode'])) :?>
        <option value="promocode" <?= ($catalogType['select'] == "promocode") ? "selected" : "" ?> >Только промокоды -  (<?=$catalogType['promocode']?>)</option>
    <?php endif;?>


    <?php
}



function renderBrands($catalogCompany){

    ?>
    <?php foreach ($catalogCompany as $key=>$val) :?>
        <div class="form-group d-flex align-items-center justify-content-between mb-2">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" <?= empty($val['select']) ? "" : "checked";   ?>  onclick="ChangeFilter()" name="companies" class="custom-control-input" title="<?=$val['url']?>" id="brand<?=$key?>">
                <label class="custom-control-label" for="brand<?=$key?>"><?=$val['name']?>
                    <span class="text-gray-25 font-size-12 font-weight-normal"> <?=$val['count']?></span>
                </label>
            </div>
        </div>
    <?php endforeach;?>


    <?php


}

function renderCategory($catalogCategories){
?>
    <option style="color: darkred" value="" >Все категории...</option>

    <?php foreach ($catalogCategories as $key=>$val) :?>

        <?php if ($val['select']) :?>
            <option  selected value="<?=$val['url']?>" ><?=$val['name']?></option>
        <?php endif;?>

        <?php if (!$val['select']) :?>
            <option value="<?=$val['url']?>" ><?=$val['name']?></option>
        <?php endif;?>


    <?php endforeach;?>

    <?php
}



function AuthAdmitad(){


    $url = API."/token/";
    $type = "POST";
    $headers = [
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic ' . base64_encode( CONFIG['ADMITAD']['cliend_id'] . ':' . CONFIG['ADMITAD']['cliend_secret'] )
    ];
    $PARAMS = [
        "grant_type" => "client_credentials",
        "client_id" => CONFIG['ADMITAD']['cliend_id'],
        "scope" => "advcampaigns_for_website coupons_for_website deeplink_generator public_data banners_for_website"
    ];
    $PARAMS = http_build_query($PARAMS);

    $result = fCURL($url, [$type => $PARAMS], $headers);

    return $result['access_token'];


}







function RenderCouponsinADD($coupons){
?>

        <label>ОФФЕР: <span class="text-danger">*</span> </label>

    <select name="coupon" class="form-control">
        <?php foreach ($coupons as $key=>$val):?>
            <option value="<?=$val['id']?>"><?=$val['name']?></option>
        <?php endforeach;?>
    </select>





        </select>


<?php
}







function renderCoupon($coupon){
    ?>

    <div class="product-item__outer h-100">
        <div class="product-item__inner p-md-3 row no-gutters">

            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">

                <div  style="width: 170px;  ">

                    <div class="prodcut-price text-center bg-white rounded-sm border border-width-2 border-red py-2 px-2">
                        <div class="text-gray-100"><?=captiondiscount($coupon['discount'])?></div>

                        <div class="mb-2 text-center"><a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)" class="font-size-12 text-gray-5"><?=json_decode($coupon['types'], true)[0]['name']?></a></div>

                        <a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)"  class="d-block text-center"><img class="img-fluid" src="<?=$coupon->companies['logo']?>" width="100" alt="<?=$coupon['short_name']?>"></a>

                    </div>
                    <br>

                    <div class="flex-bottom-between text-center mb-1">

    <?php if ($coupon['species'] == "promocode"): ?>
        <a  href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>"  onclick="clck(<?=$coupon['id']?>)"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Открыть код"  class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover">ОТКРЫТЬ КОД</a>
    <?php endif;?>

    <?php if ($coupon['species'] == "action"): ?>
        <a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Использовать"  class="btn btn-dark btn-sm-wide height-40 py-2">АКТИВИРОВАТЬ</a>
    <?php endif;?>
                    </div>

                    <div class="mb-4 text-center" style="height: 55px">
                        <div class="mb-2"><a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)" class="font-size-12 text-gray-5" tabindex="0"><?=obrezanie($coupon['name'], 60)?></a></a></div>
                    </div>

                    <hr>


                </div>



                <div class="product-item__footer">
                    <div class="border-top pt-2 flex-center-between flex-wrap">


                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Дата истечения" class="text-gray-6 font-size-13"><i class="fa fa-hourglass-half mr-1 font-size-15"></i> <?=calculate_exp($coupon['dateend'])?></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Использований" class="text-gray-6 font-size-13"><i class="fa fa-users mr-1 font-size-15"></i> <?=$coupon['used']?></a>



                    </div>
                </div>
            </div>



        </div>
    </div>
<?php
}







?>