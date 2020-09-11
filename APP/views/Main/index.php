<!-- Slider Section Start -->

<div class="deal-coupon-slider-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-xs-12 no-padding-right  hidden-xs">

                <div id="deal-coupon-slider" class="owl-carousel owl-theme slider-list">



                    <?php foreach ($couponsliseder as $key=>$banner): ?>
                        <!-- Slider Single Item Start -->
                        <div class="item">
                            <div class="hero-area bg--img" style="
                                    background-image: url(<?=$banner['pictureurl']?>);
                                    ">

                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="offer-content owl-fadeIn">
                                            <h6><a href="<?=$banner['direct_link']?>">ТОЛЬКО ПРОВЕРЕННЫЕ СКИДКИ!</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Single Item End -->


                    <?php endforeach;?>








                </div>

            </div>

            <div class="col-md-4 col-xs-12 no-padding-left">

                <div class="row">

                    <?php foreach ($couponsliseder2 as $key=>$banner): ?>

                        <div class="col-md-12 col-xs-6 no-padding-right-sm">

                            <div class="banner-wrapper">
                                <a href="<?=$banner['direct_link']?>">
                                    <img src="<?=$banner['pictureurl']?>" alt="Banner" class="img-responsive">
                                </a>
                            </div>

                        </div>

                    <?php endforeach; ?>



                </div>

            </div>

        </div>


    </div>
</div>

<!-- Slider Section End -->

<!-- New Deal Section Start -->

<div class="new-deal-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-xs-12">
                <h3 class="section-heading">Скоро истекут</h3>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="view-all">
                    <a href="/promocode">Смотреть все</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">

                        <div id="new-deal-carousel" class="owl-carousel owl-theme new-deal-list owl-loaded owl-drag">
                    <?php foreach ($widgetcoupons as $key=>$coupon): ?>


                        <?php  renderCoupon($coupon); ?>


                    <?php endforeach;?>






                </div>
            </div>
        </div>

    </div>
</div>

<!-- New Deal Section End -->

<!-- Popular Deal Section Start -->

<div class="popular-deal-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-xs-12">
                <h3 class="section-heading">Часто используемые</h3>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="view-all">
                    <a href="/promocode">Смотреть все</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="popular-deal-carousel" class="owl-carousel owl-theme new-coupon-list">


                    <?php foreach ($widgetcoupons2 as $key=>$coupon): ?>


                        <?php  renderCoupon($coupon); ?>


                    <?php endforeach;?>


                </div>


            </div>
        </div>

    </div>
</div>

<!-- Popular Deal Section End -->


<!-- Top Stores Lists Start -->
<div class="top-stores-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-xs-12">
                <h2 class="section-heading">Популярные магазины</h2>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="view-all">
                    <a href="/promocode">Смотреть все</a>
                </div>
            </div>
        </div>

        <!-- Top Store List Logo Start -->
        <div class="row">


            <?php foreach ($widget8 as $key=>$val):?>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-top-store">
                        <a href="//<?=CONFIG['DOMAIN']?>/promocode/<?=$val['uri']?>"><img src="<?=$val['logo']?>" alt="Top Store" class="img-responsive"></a>
                    </div>
                </div>

            <?php endforeach;?>






        </div>
        <!-- Top Store List Logo End -->
    </div>
</div>
<!-- Top Stores Lists End -->