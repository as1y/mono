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


    <?=generetuCouponinCode($coupons, $PAGESLIST['ViewPage'], $PAGESLIST['CouponsPerPage'])?>




    <?php
    $starpage = generateStartEndPage($PAGESLIST, $Pages)['starpage'];
    $endpage = generateStartEndPage($PAGESLIST, $Pages)['endpage'];
    require_once('includes/bootstrapnav.php');




}



function generateStartEndPage($PAGESLIST, $Pages)
{

    $starpage = 1;
    $items = 3;

    $endpage = ($Pages >= $items) ? $items : $Pages;
    // Если больше стандартный пяти
    if ($PAGESLIST['ViewPage'] >= $items) {

        // Если больше стандартный пяти
        $starpage = $PAGESLIST['ViewPage'] - 1;
        $endpage = $PAGESLIST['ViewPage'] + 1;
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

        echo '<div class="col-md-3 col-sm-4 col-xs-12">';
        renderCoupon($coupons[$key]);
        echo  ' </div>';

    }




}



function renderFilter($DATA){


    ?>
<!--    КАТЕГОРИИ-->
    <div class="col-md-12">
        <div class="cbx-sidebar">
            <div class="widget widget-couponz-slider-filter">
                <div class="row">

                    <div class="col-md-3">
                        <h4>ВЫБРАТЬ БРЕНД</h4>
                        <select class="selectpicker" id = "CategoryContainer" onchange="ChangeFilter()" name="companies" data-live-search="true">
                            <option style="color: darkred" value="" >Все бренды...</option>
                            <?php foreach ($DATA['catalogCompany'] as $key=>$val) :?>
                                <?php if ($val['select']) :?>
                                    <option  selected value="<?=$val['url']?>" ><?=$val['name']?></option>
                                <?php endif;?>

                                <?php if (!$val['select']) :?>
                                    <option value="<?=$val['url']?>" ><?=$val['name']?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <h4>ВЫБРАТЬ КАТЕГОРИЮ</h4>
                        <select class="selectpicker" id = "CategoryContainer" onchange="ChangeFilter()" name="category" data-live-search="true">
                            <option style="color: darkred" value="" >Все категории...</option>
                            <?php foreach ($DATA['catalogCategories'] as $key=>$val) :?>
                                <?php if ($val['select']) :?>
                                    <option  selected value="<?=$val['url']?>" ><?=$val['name']?></option>
                                <?php endif;?>

                                <?php if (!$val['select']) :?>
                                    <option value="<?=$val['url']?>" ><?=$val['name']?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <h4>ТИП СКИДКИ</h4>
                        <select class="selectpicker"  onchange="ChangeFilter()" name="type" data-live-search="true">
                            <option value="" >ВСЕ ТИПЫ</option>

                            <?php if (!empty($DATA['catalogType']['action'])) :?>
                                <option value="action" <?= ($DATA['catalogType']['select'] == "action") ? "selected" : "" ?>  >Только скидки - (<?=$DATA['catalogType']['action']?>)</option>
                            <?php endif;?>

                            <?php if (!empty($DATA['catalogType']['promocode'])) :?>
                                <option value="promocode" <?= ($DATA['catalogType']['select'] == "promocode") ? "selected" : "" ?> >Только промокоды -  (<?=$DATA['catalogType']['promocode']?>)</option>
                            <?php endif;?>
                        </select>
                    </div>


                </div>






            </div>




        </div>
    </div>




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


    <div id="couponmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&#xD7;</button>
                    <h4 class="modal-title"><?=$couponmodal->companies['name']?> - <?=captiondiscount($couponmodal['discount'])?></h4>
                </div>
                <div class="modal-body">
                    <div class="coupon-modal-content">
                        <div class="row">
                            <div class="col-md-12">
                                <font color="#df3737">Для Вашего удобства сайт магазина уже открыт в соседней вкладке.</font>
                                <hr>
                            </div>

                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="single-coupon-thumb">
                                    <img src="<?=$couponmodal->companies['logo']?>" width="600" class="img-thumbnail img-responsive">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">

                                <?php if (!empty($couponmodal['short_name'])):?>
                                    <p><?=$couponmodal['short_name']?><br></p>
                                <?php endif; ?>

                             <?php if ($couponmodal['species'] == "promocode"):?>
                                <div class="input-group">
                                    <input type="text" class="form-control" autocomplete="off" readonly value="<?=$couponmodal['promocode']?>">
                                    <div class="input-group-btn">
                                        <button class="clipboard btn btn-default" data-clipboard-text="<?=$couponmodal['promocode']?>"><i class="fa fa-clipboard" aria-hidden="true"></i> КОПИРОВАТЬ</button>
                                    </div>
                                </div>
                              <?php endif; ?>

                                <?php if ($couponmodal['species'] == "action"):?>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" readonly value="<?=$couponmodal['promocode']?>">
                                    </div>
                                <?php endif; ?>



                                <a class="btn btn-brand" href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$couponmodal['id']?>">ПЕРЕЙТИ В МАГАЗИН</a>

                            </div>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

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


function toWindow($ii){
    return iconv( "utf-8", "windows-1251",$ii);
}






function renderCoupon($coupon){
    ?>


    <!-- Coupon Single Item Start -->
    <div class="item coupon-item">
        <div class="coupon-thumb">

                <img src="<?=$coupon->companies['logo']?>" alt="" class="img-responsive">


            <div class="coupon-badge">
                <?=captiondiscount($coupon['discount'])?>
            </div>

            <?php if ($coupon['species'] == "promocode"): ?>
                <a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>"  onclick="clck(<?=$coupon['id']?>)" class="btn btn-brand">ОТКРЫТЬ ПРОМОКОД</a>

            <?php endif;?>

            <?php if ($coupon['species'] == "action"): ?>
                <a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)"class="btn btn-brand" >АКТИВИРОВАТЬ</a>
            <?php endif;?>





        </div>
        <div class="coupon-content">
            <h6><a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)"><?=$coupon->companies['name']?> </a></h6>
            <p><?=obrezanie($coupon['short_name'], 50)?></p>
            <div class="coupon-content-bottom">
                <p><i class="fa fa-users"></i> <?=$coupon['used']?>
                    <i class="fa fa-clock-o"></i> <?=calculate_exp($coupon['dateend'])?>
                </p>

                <a href="//<?=CONFIG['DOMAIN']?>/go/?coupon=<?=$coupon['id']?>" onclick="clck(<?=$coupon['id']?>)"  class="btn btn-sm">ПЕРЕЙТИ</a>
            </div>
        </div>
    </div>
    <!-- Coupon Single Item End -->




<?php
}







?>