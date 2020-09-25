<!DOCTYPE html>
<html lang="ru">
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php \APP\core\base\View::getMeta()?>


    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/assets_main/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets_main/css/theme.css">
    <link rel="stylesheet" href="/assets_main/css/theme-elements.css">
    <link rel="stylesheet" href="/assets_main/css/theme-blog.css">
    <link rel="stylesheet" href="/assets_main/css/theme-shop.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="/assets_main/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/assets_main/css/custom.css">

    <!-- Head Libs -->
    <script src="/assets_main/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" style="height: 126px;">
        <div class="header-body header-body-bottom-border border-top-0" style="position: fixed; top: 0px;">
            <div class="header-container header-container-height-md container" style="height: 125px; min-height: 0px;">
                <div class="header-row">

                    <div class="header-column justify-content-center w-auto-mobile w-50 order-3 order-lg-1">
                        <div class="header-nav justify-content-start header-nav-line header-nav-bottom-line">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">


                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="dropdown-item <?= (empty($arrtype)) ? "active" : ""; ?>" href="/">
                                               ВСЕ СКИДКИ
                                               </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item <?= ($arrtype == "promocode") ? "active" : ""; ?> " href="/promocode">
                                                ПРОМОКОДЫ
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item <?= ($arrtype == "action") ? "active" : ""; ?> " href="/sale">
                                               АКЦИИ
                                            </a>
                                        </li>

<!--                                        <li>-->
<!--                                            <a class="dropdown-item " href="/main/news">-->
<!--                                                НОВОСТИ-->
<!--                                            </a>-->
<!--                                        </li>-->

                                    </ul>


                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <div class="header-column justify-content-center order-1 order-lg-2">
                        <div class="header-row">
                            <div class="header-logo" style="width: 100px; height: 48px;">
                                <a href="/">
                                    <img alt="<?=APPNAME?>" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="<?=$ABOUTCOMPANY['company']['logo']?>" style="top: 0px; width: 100px; height: 48px;">
                                </a>

                            </div>
                        </div>

                    </div>
                    <div class="header-column justify-content-center w-100-mobile w-50 order-2 order-lg-3">
                        <div class="header-row justify-content-end">
                            <b><?=APPNAME?></b> &nbsp; промокоды, купоны

                            <a href="<?=$ABOUTCOMPANY['company']['ulp']?>" target="_blank" class="btn btn-lg btn-outline btn-dark font-weight-semibold line-height-1 text-1 ml-2 d-none d-md-inline-block">ПЕРЕЙТИ В <?=APPNAME?></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>


    <div role="main" class="main">
        <div class="container">
            <div class="row">


                <!-- РАБОЧАЯ ОБЛАСТЬ-->
                <div class="col-lg-9 order-lg-1">
                    <h1><?php \APP\core\base\View::getH1();?></h1>

                    <div class="blog-posts" id="CouponContainer">

                        <?php
                        generateResult($coupons, $PAGESLIST);
                        ?>

                    </div>


                </div>
                <!-- РАБОЧАЯ ОБЛАСТЬ-->


                <!-- МЕНЮ -->
                <div class="col-lg-3 order-lg-2">
                    <aside class="sidebar">
                        <h5 class="font-weight-bold pt-4">ПРОМОКОДЫ <?=APPNAME?> <br>ПО КАТЕГОРИЯМ</h5>
                        <ul class="nav nav-list flex-column mb-5">

                            <li class="nav-item"><a class="nav-link <?= (empty($idcat)) ? "active" : ""; ?>" href="/ ">ВСЕ КАТЕГОРИИ</a></li>
                            <?php foreach ($catalogCategories as $val): ?>
                                <li class="nav-item"><a class="nav-link  <?= ($val['id'] == $idcat) ? "active" : ""; ?>   " href="/<?=$val['url']?> "><?=$val['name']?>  (<?=$val['count']?> )</a></li>
                            <?php endforeach;?>

                        </ul>


                        <?php if(!empty($ABOUTCOMPANY['banners'])) : ?>
                        <noindex>
                            <a href="<?=$ABOUTCOMPANY['banners']['direct_link']?>" target="_blank" rel="nofollow"><img id="bannercompany" src="/assets/load.gif"></a>
                        </noindex>

                        <?php endif;?>
                        <input type="hidden" id="idcat" value="<?=$idcat?>">
                        <input type="hidden" id="arrtype" value="<?=$arrtype?>">

                        <h5 class="font-weight-bold pt-4">О МАГАЗИНЕ <?=APPNAME?></h5>

                        В магазине продаются товары следующих категорий:<br>
                        <hr>
                        <?php foreach ($ABOUTCOMPANY['category'] as $val): ?>
                            - <?=$val['name']?> <br>
                        <?php endforeach;?>
                        <hr>


                    </aside>
                </div>
                <!-- МЕНЮ -->



            </div>

        </div>

    </div>




    <footer id="footer">
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="index.html" class="logo pr-0 pr-lg-3">
                            <img alt="<?=APPNAME?> промокод" src="<?=$ABOUTCOMPANY['company']['logo']?>" class="opacity-5" height="33">
                        </a>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <p>Данный ресурс носит исключительно информационно-ознакомительный характер. Сайт не является официальным продуктом компании.</p>
                        <p> Официальный сайт расположен по адресу <?=$ABOUTCOMPANY['company']['url']?> </p>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <p> Товарные знаки и права  принадлежат компании <?=APPNAME?></p>



                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>



<!-- Vendor -->
<script src="/assets_main/vendor/jquery/jquery.min.js"></script>
<script src="/assets_main/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/assets_main/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets_main/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/assets_main/vendor/popper/umd/popper.min.js"></script>
<script src="/assets_main/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets_main/vendor/common/common.min.js"></script>
<script src="/assets_main/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="/assets_main/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/assets_main/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/assets_main/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="/assets_main/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/assets_main/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/assets_main/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets_main/vendor/vide/jquery.vide.min.js"></script>
<script src="/assets_main/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/assets_main/js/theme.js"></script>

<!-- Theme Custom -->
<script src="/assets_main/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets_main/js/theme.init.js"></script>


<!-- PreloadBanner -->
<script>
    $(document).ready(function() {
        $('#bannercompany').attr("src", "<?=$ABOUTCOMPANY['banners']['pictureurl']?>");
    });
</script>
<!-- PreloadBanner -->


<script src="/coupons_script.js"></script>

<!-- COUPONS NGINE -->
<?php if (!empty($_COOKIE['runmodal'])): ?>
<?php  popUPcoupon(); ?>
<script>
    $(window).on('load', function () {
        document.cookie = "runmodal=";
        $('#couponmodal').modal('show');

    }   );
</script>
<?php endif;?>
<!-- COUPONS NGINE -->


<?php \APP\core\base\Model::SaveUsr();?>




</body>
</html>
