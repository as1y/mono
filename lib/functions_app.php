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

function generetuCouponinCode($coupons){

    foreach ($coupons as $key=>$coupon){
        echo '<li class="col-6 col-md-3 col-wd-2gdot4 product-item">';
        renderCoupon($coupon);
        echo  ' </li>';
    }


}


function captiondiscount($discount){


    if($discount == "1%") $discount = NULL;

    if (empty($discount))   $caption = '<i class="fa fa-check-circle"> </i>';

    if (!empty($discount))   $caption = '<i class="fa fa-gift"> '.$discount.'</i>';

    return $caption;

}

function constructWhere($ARR){

    if (empty($ARR)) return "";

    if (count($ARR) == 1) return "WHERE ".$ARR[0];

    $WHERE = "WHERE ".$ARR[0];
    for ($key = 1; $key < count($ARR); $key++) {
        $WHERE .= " AND ".$ARR[$key];
    }

    return $WHERE;

}



function renderCategory($catalogCategories){
?>
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


function CheckNumericArr($ARR){

    $ARRcheck = explode(",", $ARR);
//         Проверка на число
    foreach ($ARRcheck as $key){
        if (is_numeric($key) == false) unset($ARR[$key]);
    }
//         Проверка на число

    return $ARR;
}



function renderCoupon($coupon){
    ?>


            <div class="product-item__outer h-100">
                <div class="product-item__inner bg-white px-wd-4 p-2 p-md-3">
                    <div class="product-item__body pb-xl-2">


                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="<?=$coupon->companies['logo']?>" width="250" alt="<?=$coupon['short_name']?>"></a>
                        </div>
                        <div class="text-lh-1 px-2 text-center">
                            <div class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46">

                                <div class="prodcut-price text-center">
                                    <div class="text-gray-100"><?=captiondiscount($coupon['discount'])?></div>
                                </div>
                                <div class="mb-2 text-center"><a href="#" class="font-size-12 text-gray-5"><?=json_decode($coupon['types'], true)[0]['name']?></a></div>

                            </div>
                        </div>

<br>


                        <h5 class="mb-1 text-center product-item__title"><a href="#" class="text-blue font-weight-bold"><?=obrezanie($coupon['name'],40)?></a></h5>

                        <div class="flex-bottom-between text-center mb-1">


                            <?php if ($coupon['species'] == "promocode"): ?>
                                <a href="../shop/single-product-fullwidth.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Показать"  class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover">ПРОМОКОД</a>
                            <?php endif;?>

                            <?php if ($coupon['species'] == "action"): ?>
                                <a href="../shop/single-product-fullwidth.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Использовать"  class="btn btn-dark btn-sm-wide height-40 py-2">ПЕРЕЙТИ</a>
                            <?php endif;?>


                        </div>
                    </div>

                    <div class="product-item__footer">
                        <div class="border-top pt-2 flex-center-between flex-wrap">


                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Дата истечения" class="text-gray-6 font-size-13"><i class="fa fa-hourglass-half mr-1 font-size-15"></i> <?=calculate_exp($coupon['dateend'])?></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Использований" class="text-gray-6 font-size-13"><i class="fa fa-users mr-1 font-size-15"></i> <?=$coupon['used']?></a>



                        </div>
                    </div>

                </div>
            </div>


<?php
}







?>