<?php
//show($_COOKIE);
?>

<main id="content" role="main">
    <!-- Vertical-Slider-Category-Banner Section -->
    <div class="mb-6 bg-gray-1 pb-4">
        <div class="container">
            <div class="row no-gutters">
                <!-- Vertical Menu -->
                <div class="col-md-auto d-none d-xl-block">
                    <div class="max-width-270 min-width-270">
                        <!-- Basics Accordion -->
                        <div id="basicsAccordion">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-header card-collapse border-0 flex-center-between bg-primary text-lh-1 rounded-0" id="basicsHeadingOne">
                                    <div class="btn-link btn-remove-focus btn-block pl-4 py-3 card-btn shadow-none rounded-0 border-0 font-weight-bold text-gray-90"
                                         data-toggle="collapse"
                                         data-target="#basicsCollapseOne"
                                         aria-expanded="true"
                                         aria-controls="basicsCollapseOne">
                                        <span class="pl-1 text-gray-90">КАТЕГОРИИ</span>
                                    </div>
                                    <a href="/promocode/vse/" class="d-block font-size-13 py-3 pr-4 font-weight-bold text-gray-90 ml-auto flex-shrink-0">Все</a>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show vertical-menu rounded-0"
                                     aria-labelledby="basicsHeadingOne"
                                     data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">


                                                <ul class="navbar-nav u-header__navbar-nav">


                                                    <?php foreach (\APP\models\Panel::getCategory(13) as $val): ?>
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a class="nav-link u-header__nav-link " href="//<?=CONFIG['DOMAIN']?>/promocode/vse/<?=$val['url']?>" aria-haspopup="true" aria-expanded="false"><?=obrezanie($val['name'], 23)?> <span class="text-gray-25 font-size-12 font-weight-normal"> (<?=$val['count']?>)</span></a>
                                                        </li>
                                                    <?php



                                                    endforeach; ?>



                                                </ul>



                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Basics Accordion -->
                    </div>
                </div>
                <!-- End Vertical Menu -->
                <!-- Slider-Category Section -->
                <div class="col">
                    <div class="max-width-890-wd max-width-660-xl">
                        <!-- Slider -->
                        <div class="slider-bg max-height-345-xl max-height-348-wd">
                            <div class="overflow-hidden">
                                <div class="js-slick-carousel u-slick"
                                     data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-5 ml-3 ml-md-4 ml-lg-9 ml-xl-4 ml-wd-9">

                                    <?php foreach ($couponsliseder as $key=>$coupon):
                                        $company = $coupon->companies;
                                        $banner = \APP\core\base\Model::GenerateBanner(['company' => $company, 'forma' => 'kvadrat', 'wn' => 400, 'hn' => 400]);
                                        ?>

                                        <div class="js-slide">
                                            <div class="py-6 py-md-4 px-3 px-md-4 px-lg-9 px-xl-4 px-wd-9">
                                                <div class="row no-gutters">
                                                    <div class="col-xl-6 col-6 mt-md-5">


                                                        <h1 class="font-size-58-sm text-lh-57 font-weight-light"
                                                            data-scs-animation-in="fadeInUp">
                                                            <?=mb_strtoupper($company['name'])?>
                                                        </h1>


                                                        <h6 class="font-size-15-sm font-weight-bold mb-2 mb-md-3"
                                                            data-scs-animation-in="fadeInUp"
                                                            data-scs-animation-delay="200"><?=$coupon['short_name']?>
                                                        </h6>
                                                        <div class="mb-2 mb-md-4"
                                                             data-scs-animation-in="fadeInUp"
                                                             data-scs-animation-delay="300">

                                                            <a target="_blank" style="color: #df3737 " href="<?=$coupon['framset']?>">
                                                            <span class="font-size-13"><?=json_decode($coupon['types'], true)[0]['name']?></span>
                                                                <div class="font-size-50 font-weight-bold text-lh-45"><?=captiondiscount($coupon['discount'])?></div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-6 d-flex align-items-center"
                                                         data-scs-animation-in="zoomIn"
                                                         data-scs-animation-delay="400">

                                                        <a target="_blank" href="<?=$coupon['framset']?>">
                                                        <img class="img-fluid max-width-300-md" src="<?=$banner['img']?>" alt="<?=$coupon['name']?>">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <?php endforeach;?>






                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <!-- Category -->
                        <ul class="list-group list-group-horizontal-sm position-relative z-index-2 flex-row overflow-auto overflow-md-visble">


                            <?php foreach ($widget5 as $key=>$company):?>

                                <?php  $banner = \APP\core\base\Model::GenerateBanner(['company' => $company, 'forma' => 'kvadrat', 'wn' => 300, 'hn' => 300]); ?>

                                <li class="list-group-item py-2 px-3 px-xl-4 px-wd-5 flex-horizontal-center shadow-on-hover-1 rounded-0 border-top-0 border-bottom-0 flex-shrink-0 flex-md-shrink-1">
                                    <a href="<?=$banner['link']?>" target="_blank" class="d-block py-2 text-center">
                                        <h6 class="font-size-14 mb-0 text-gray-90 font-weight-semi-bold"><?=obrezanie($company['name'], 15)?></h6>
                                        <img class="img-fluid mb-1 max-width-100-sm" src="<?=$banner['img']?>" width="300" alt="Image Description">
                                    </a>
                                </li>


                            <?php endforeach;?>





                        </ul>
                        <!-- End Category -->
                    </div>
                </div>
                <!-- End Slider-Category Section -->
                <!-- Banner -->
                <div class="col-md-auto">
                    <div class="max-width-240-xl">
                        <div class="d-md-flex d-xl-block">



                            <?php $i=0; foreach ($widget3 as $key=>$val): ?>

                                <div class="bg-white border-top">
                                    <a href="//<?=CONFIG['DOMAIN']?>/promocode/<?=$val['uri']?>" class="text-gray-90 position-relative d-block overflow-hidden">
                                        <div class="position-absolute transform-rotate-16-banner">

                                       <img class="img-fluid" src="<?=$val['logo']?>" alt="<?=$val['name']?>">

                                        </div>
                                        <div class="px-4 py-6 min-height-172">
                                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                                Промкоды и акции в  <strong> <?=mb_strtoupper ($val['name'])?></strong> <strong>
                                            </div>
                                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                                Подробнее
                                                <span class="link__icon ml-1">
                                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                                    </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            <?php  endforeach;?>





                        </div>
                    </div>
                </div>
                <!-- End Banner -->
            </div>
        </div>
    </div>
    <!-- End Vertical-Slider-Category-Banner Section -->
    <div class="container">

        <!-- ITEKAYT -->
        <div class="bg-gray-7 mb-6 py-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-wd-2">
                        <div class="max-width-244">
                            <div class="d-flex border-bottom border-color-1 mb-3">
                                <h3 class="section-title mb-0 pb-2 font-size-22">СКОРО ИСТЕКУТ!</h3>
                            </div>
                            <div class="mb-3 mb-md-2 text-center text-md-left">
                                <h1 class="font-size-130 font-weight-light mb-2 text-lh-1">%</h1>
                                <h6 class="text-gray-2 mb-2">Купон истечет через:</h6>
                                <div class="js-countdown d-flex mx-n2 justify-content-center justify-content-md-start"
                                     data-end-date="2020/11/30"
                                     data-hours-format="%H"
                                     data-minutes-format="%M"
                                     data-seconds-format="%S">
                                    <div class="text-lh-1 px-2 text-center">
                                        <div class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46">
                                            <div class="text-gray-2 font-size-20 mb-2">
                                                <span class="js-cd-hours"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-8 text-center">ЧАСОВ</div>
                                        </div>
                                    </div>
                                    <div class="text-lh-1 px-2 text-center">
                                        <div class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46">
                                            <div class="text-gray-2 font-size-20 mb-2">
                                                <span class="js-cd-minutes"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-8 text-center">МИНУТ</div>
                                        </div>
                                    </div>
                                    <div class="text-lh-1 px-2 text-center">
                                        <div class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46">
                                            <div class="text-gray-2 font-size-20 mb-2">
                                                <span class="js-cd-seconds"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-8 text-center">СЕКУНД</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 col-wd-10">
                        <div class="">
                            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-5 pt-2 px-1"
                                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 pt-1"
                                 data-slides-show="5"
                                 data-slides-scroll="1"
                                 data-responsive='[{
                                      "breakpoint": 1400,
                                      "settings": {
                                        "slidesToShow": 4
                                      }
                                    }, {
                                        "breakpoint": 1200,
                                        "settings": {
                                          "slidesToShow": 3
                                        }
                                    }, {
                                      "breakpoint": 992,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }, {
                                      "breakpoint": 768,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }, {
                                      "breakpoint": 554,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }]'>



                                <?php foreach ($widgetcoupons as $key=> $coupon):?>
                                    <div class="js-slide products-group">
                                        <div class="product-item mx-1 remove-divider">

                                            <?php  renderCoupon($coupon); ?>
                                        </div>
                                    </div>


                                <?php endforeach;?>






                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ITEKAYT -->


        <!-- 4 element -->
        <div class="row mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">


            <?php $i=0;  foreach ($widget4 as $key=>$company):?>

                <div class="col-md-6 mb-4 mb-xl-0 col-xl-4 col-wd-3 flex-shrink-0 flex-xl-shrink-1">
                    <a href="//<?=CONFIG['DOMAIN']?>/promocode/<?=$company['uri']?>" class="min-height-146 py-1 py-xl-2 py-wd-1 banner-bg d-flex align-items-center text-gray-90">
                        <div class="col-6 col-xl-7 col-wd-6 pr-0">
                            <img class="img-fluid" src="<?=$company['logo']?>" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                Промокоды <?=$company['name']?>
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Подробнее
                                <span class="link__icon ml-1">
                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                    </span>
                            </div>
                        </div>
                    </a>
                </div>


            <?php endforeach;?>

        </div>
        <!-- 4 element -->


        <!-- PO KATEGORIYAM -->
        <div class="mb-6">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2">
                <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">СКИДКИ ПО МАГАЗИНАМ</h3>
                </div>
            </div>
            <!-- End Nav Pills -->
            <div class="row">
                <div class="col-12 col-xl-auto pr-lg-2">
                    <div class="min-width-200 mt-xl-5">
                        <ul class="list-group list-group-flush flex-nowrap flex-xl-wrap flex-row flex-xl-column overflow-auto overflow-xl-visble mb-3 mb-xl-0 border-top border-color-1 border-lg-top-0">

                            <?php foreach ($shops as $val): ?>
                                <li class="border-color-1 list-group-item border-lg-down-0 flex-shrink-0 flex-xl-shrink-1"><a class="hover-on-bold py-1 px-3 text-gray-90 d-block" href="//<?=CONFIG['DOMAIN']?>/promocode/<?=$val['uri']?>"><?=$val['name']?></a></li>
                            <?php endforeach;?>



                        </ul>
                    </div>
                </div>



                <div class="text-lh-1 px-2 ">
                    <div class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46">
                        <?php
                        $cmp = \APP\core\base\Model::LoadCustomCompany(3);
                        $banner = \APP\core\base\Model::GenerateBanner(['company' => $cmp, 'forma' => 'vertikal', 'wn' => 300, 'hn' => 500]);

                        ?>
                        <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="<?=$banner['img']?>" width="300" height="500" alt="Image Description"></a>


                    </div>
                </div>




                <div class="col-md">
                    <ul class="row list-unstyled products-group no-gutters mb-0">

                        <?php foreach ($widgetcoupons2 as $key=>$coupon): ?>
                            <li class="col-6 col-md-4 col-wd-3 product-item">


                                <?php  renderCoupon($coupon); ?>

                            </li>
                        <?php endforeach;?>




                    </ul>
                </div>
            </div>
        </div>
        <!-- PO KATEGORIYAM -->

        <!-- Brand Carousel -->
        <div class="container mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                     data-slides-show="5"
                     data-slides-scroll="1"
                     data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                     data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                     data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                     data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>



                    <?php foreach ($widget20 as $key=>$val):?>
                        <div class="js-slide">
                            <a href="//<?=CONFIG['DOMAIN']?>/promocode/<?=$val['uri']?>" class="link-hover__brand">
                                <img class="img-fluid m-auto max-height-50" src="<?=$val['logo']?>" alt="Image Description">
                            </a>
                        </div>
                    <?php endforeach;?>



                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->



    </div>
</main>