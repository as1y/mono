<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php \APP\core\base\View::getMeta()?>
    <meta name="verify-admitad" content="f036591869" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <meta name="theme-color" content="#FF0000">

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
    <script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- GOOGLE FONT -->
    <link href="//fonts.googleapis.com/css?family=Cabin:400,700%7CUbuntu:300,400,700" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets_main/vendor/bootstrap/css/bootstrap.min.css" media="all">

    <!-- ДОБАВЛЕНИЕ BOOTSTRAP SELECT-->
    <link rel="stylesheet" href="/vendor/snapappointments/bootstrap-select/dist/css/bootstrap-select.min.css">




    <!--owl-->
    <link rel="stylesheet" href="/assets_main/vendor/owl-carousel/dist/assets/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="/assets_main/vendor/owl-carousel/dist/assets/owl.theme.default.min.css" media="all">

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="/assets_main/vendor/font-awesome/css/font-awesome.min.css" media="all">

    <!-- linearicons -->
    <link rel="stylesheet" href="/assets_main/vendor/linearicons/webfont/style.css" media="all">

    <!-- animate.css -->
    <link rel="stylesheet" href="/assets_main/vendor/animate/animate.min.css" media="all">

    <!-- flatpickr -->
    <link rel="stylesheet" href="/assets_main/vendor/flatpickr/flatpickr.min.css" media="all">

    <!-- lity -->
    <link rel="stylesheet" href="/assets_main/vendor/lity/lity.min.css" media="all">


    <!-- CUSTOM  CSS  -->
    <link id="cbx-style" rel="stylesheet" href="/assets_main/css/style-red.css" media="all">
    <!-- MODERNIZER  -->
    <script src="/assets_main/vendor/modernizr/modernizr.min.js"></script>


    <?php gtmHEAD();?>
</head>
<body>
<?php gtmBODY();?>



<!--[if lt IE 7]>
<p class="browsehappy">Для просмотра сайта обновите браузер </p>
<![endif]-->

<div class="cbx-container">
    <!-- SITE CONTENT -->

    <!-- Header Part Start -->
    <header class="cbx-header">

        <div id="searchBar" class="collapse">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="searchbar-wrapper">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input autocomplete="off" type="text" class="form-control" placeholder="Поиск" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Part End -->

        <!-- Header Bottom Part Start -->
        <div class="cbx-header-bottom">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header hidden-lg hidden-md hidden-sm">

                            <h2 class="btn-danger">KODYPROMO.RU</h2>
                            Действующие промокоды, скидки, акции
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                            <ul class="nav navbar-nav">

                                <li><a href="/">Промокоды</a></li>

                                <li><a href="/promocode">КАТАЛОГ ПРОМОКОДОВ</a></li>





                            </ul>








                            <ul class="nav navbar-nav navbar-right hidden-xs">
                                <li><a class="btn-warning"  href="/">KODYPROMO.RU</a></li>
                            </ul>





                        </div><!-- /.navbar-collapse -->

                    </nav>
                </div>

            </div>
        </div>
        <!-- Header Bottom Part End -->

    </header>
    <!-- Header Part End -->


    <?=$content?>



    <!-- Footer Part Start -->
    <footer class="cbx-footer">

        <!-- Footer Top Part Start -->
        <div class="cbx-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Footer widget about Part Start -->
                        <div class="widget widget-about">
                            <div class="widget-brand">
                                <a href="#">
                                    © <?=date('Y')?> KODYPROMO.RU
                                </a>
                            </div>
                            <p>Действующие промокоды, акцци, скидки в популярных магазинах</p>
                        </div>
                        <!-- Footer widget about Part End -->
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Footer widget listings Part Start -->
                        <div class="widget widget-listings">
                            <h2>ПРОМОКОДЫ</h2>
                        </div>
                        <!-- Footer widget listings Part End -->
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Footer widget widget-listings Part Start -->
                        <div class="widget widget-listings">
                            <h2>СКИДКИ</h2>




                        </div>
                        <!-- Footer widget widget-listings Part End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Footer widget newsletter Part Start -->
                        <div class="widget widget-newsletter">
                            <div class="widget-newsletter-area">
                                <form id="cbx-subscribe-form" class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="email" id="subscribe" required class="form-control" placeholder="Введите Email" name="email">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-send-o"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <p>Подписать на свежие промокоды</p>
                            </div>
                        </div>
                        <!-- Footer widget newsletter Part End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Part End -->


    </footer>
    <!-- Footer Part End -->

    <!-- Scroll to Top Start -->
    <a href="#" class="scrollToTop">
        <i class="fa fa-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->


    <!-- //SITE CONTENT END -->

</div>


<!-- SITE SCRIPT  -->

<!-- jquery -->
<script src="/assets_main/vendor/jquery/jquery-1.11.3.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/assets_main/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- load if our contact form or email subscribe options is used -->
<script src="/assets_main/vendor/validation/jquery.validate.js"></script>

<!--owl-->
<script src="/assets_main/vendor/owl-carousel/dist/owl.carousel.min.js"></script>

<!-- clipboard.js -->
<script src="/assets_main/vendor/clipboard.js/clipboard.min.js"></script>

<!-- flatpickr -->
<script src="/assets_main/vendor/flatpickr/flatpickr.js"></script>

<!-- lity -->
<script src="/assets_main/vendor/lity/lity.min.js"></script>

<!-- Bootstrap Slider -->
<script src="/assets_main/vendor/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- switcher -->

<script>
    $(window).on('load', function () {
        document.cookie = "runmodal=";
        $('#couponmodal').modal('show');

    }   );
</script>

<?php
unset($_COOKIE['runmodal']) ;

if (!empty($_COOKIE['runmodal'])): ?>

<?php  popUPcoupon() ?>
<script>
    $(window).on('load', function () {
        document.cookie = "runmodal=";
        $('#couponmodal').modal('show');

    }   );
</script>
<?php endif;?>


<!-- COUPONS NGINE -->
<script src="/vendor/snapappointments/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/coupons_script.js"></script>

<!-- COUPONS POP-UP ENGINE -->
<?php \APP\core\base\Model::SaveUsr();?>





<!-- THEME SCRIPT  -->
<script src="/assets_main/js/theme.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="/assets_main/js/custom.js"></script>


</body>
</html>