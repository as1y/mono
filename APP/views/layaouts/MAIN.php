<!DOCTYPE html>
<html lang="ru">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php \APP\core\base\View::getMeta()?>
    <meta name="verify-admitad" content="88fe65ef3a" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets_main/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets_main/css/font-electro.css">

    <link rel="stylesheet" href="/assets_main/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/assets_main/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="/assets_main/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/assets_main/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/assets_main/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="/assets_main/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/assets_main/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="/assets_main/css/theme.css">
    <link rel="stylesheet" href="/assets_main/css/custom.css">

    <!-- ПОИСК -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NC7T4PT');</script>
    <!-- End Google Tag Manager -->


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NC7T4PT"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav border-bottom border-color-1">
    <div class="u-header__section">

        <!-- Logo-Search-header-icons -->
        <div class="py-2 py-xl-3 bg-primary bg-xl-transparent">
            <div class="container">
                <div class="row my-0dot5 my-xl-0 align-items-center position-relative">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto ">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0">
                            <!-- Fullscreen Toggle Button -->

                            <div class="d-xl-none">
                                <button id="sidebarHeaderInvoker" type="button" class="navbar-toggler d-block btn u-hamburger mr-3"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                </button>
                            </div>



                            <!-- End Fullscreen Toggle Button -->

                            <!-- Logo -->
                            <a  href="/" >
                                <b class="btn btn-dark  height-40 py-2"  style="border-radius: 0; display: inline; cursor: pointer; ">ПРОМОКОДЫ </b>

                            </a>
                            &nbsp; COUPONS.GALLERY

                            <!-- End Logo -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->
                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset pb-0">
                                        <!-- Toggle Button -->
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                            <button type="button" class="close ml-auto"
                                                    aria-controls="sidebarHeader"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-hide-on-scroll="false"
                                                    data-unfold-target="#sidebarHeader1"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-animation-in="fadeInLeft"
                                                    data-unfold-animation-out="fadeOutLeft"
                                                    data-unfold-duration="500">
                                                <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>
                                        <!-- End Toggle Button -->

                                        <!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">

                                                <a style="color: #df3737  " href="/">ГЛАВНАЯ</a>
                                                <hr>
                                                <!-- Logo -->
                                                <b>ФИЛЬТР ПО КАТЕОРИЯМ</b>
                                                <!-- End Logo -->
                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <!-- Home Section -->
                                                    <li class="u-has-submenu ">

                                                        <?php foreach (\APP\models\Panel::getCategory(13) as $val): ?>
                                                            <a class="u-header-collapse__nav-link" href="//<?=CONFIG['DOMAIN']?>/promocode/vse/<?=$val['url']?>" >
                                                                <?=obrezanie($val['name'], 23)?>
                                                            </a>
                                                        <?php  endforeach; ?>
                                                    </li>
                                                    <!-- End Home Section -->




                                                </ul>
                                                <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col pl-0 d-none d-xl-block">
                        <form method="post" action="/search/" class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Поиск</label>
                            <div class="input-group">


                                <input  type="search" id="search" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"  id="query" name="query" placeholder="Поиск промокодов" value="" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">

                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="submit" >
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>

                                </div>



                            </div>


                        </form>



                    </div>
                    <!-- End Search Bar -->
                    <!-- Secondary Menu -->
                    <div class="col-md-auto position-static d-none d-xl-block">
                        <div class="secondary-menu v1">
                            <!-- Nav -->
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space position-static">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">

                                        <!-- Featured Brands -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link text-sale" href="/promocode/vse/" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Фильтр промокодов</a>
                                        </li>
                                        <!-- End Featured Brands -->


                                        <!-- Featured Brands -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="/" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Главная</a>
                                        </li>
                                        <!-- End Featured Brands -->


                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                    </div>
                    <!-- End Secondary Menu -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Поиск"
                                       aria-controls="searchClassic"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       data-unfold-target="#searchClassic"
                                       data-unfold-type="css-animation"
                                       data-unfold-duration="300"
                                       data-unfold-delay="300"
                                       data-unfold-hide-on-scroll="true"
                                       data-unfold-animation-in="slideInUp"
                                       data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">


                                        <form method="post" action="/search/" class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" name="query" placeholder="Например, Беру ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3"  type="submit"><i class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>


                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->

                                <li class="col d-none d-xl-block"><a href="#" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Добавить в закладки"><i class="font-size-22 ec ec-favorites"></i></a></li>

                                <li class="col d-none d-xl-block"><a href="#" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Ваш регион"><i class="font-size-22 ec ec-map-pointer"></i></a></li>

                                <li class="col d-none d-xl-block">   <strong>Москва&nbsp; </strong></li>




                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo-Search-header-icons -->
    </div>
</header>
<!-- ========== END HEADER ========== -->


<!-- ========== MAIN CONTENT ========== -->
<?=$content?>
<!-- ========== END MAIN CONTENT ========== -->



<!-- ========== FOOTER ========== -->
<footer>

    <div class="d-none d-sm-block">
    <!-- Footer-newsletter -->
    <div class="bg-primary py-3 mb-0">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center ">
                        <div class="col-auto flex-horizontal-center ">
                            <i class="ec ec-newsletter font-size-40"></i>
                            <h2 class="font-size-20 mb-0 ml-3">Подписка на рассылку</h2>
                        </div>
                        <div class="col my-4 my-md-0">
                            <h5 class="font-size-15 ml-4 mb-0">Узнавайте первыми о новых скидках! </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="js-validate js-form-message">
                        <label class="sr-only" for="subscribeSrEmail">Введите E-mail</label>
                        <div class="input-group input-group-pill">
                            <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Введите E-mail" aria-label="Email address" aria-describedby="subscribeButton" required
                                   data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Подписаться</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-newsletter -->
    </div>

    <!-- Footer-copy-right -->
    <div class="bg-gray-14 py-2">
        <div class="container">
            <div class="flex-center-between d-block d-md-flex">
                <div class="mb-3 mb-md-0">© <?=date('Y')?> <a href="#" class="font-weight-bold text-gray-90"><?=mb_strtoupper(CONFIG['DOMAIN'])?></a> - Промокоды, скидки, акции, купоны, распродажи</div>
                <div class="text-md-right d-none d-sm-block">

                     <a class="btn" href="mailto: info@coupons.gallery"> <i class="fa fa-envelope-open-text"></i> info@coupons.gallery</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-copy-right -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                <!-- Toggle Button -->
                <div class="d-flex align-items-center pt-4 px-7">
                    <button type="button" class="close ml-auto"
                            aria-controls="sidebarContent"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-unfold-event="click"
                            data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent"
                            data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInRight"
                            data-unfold-animation-out="fadeOutRight"
                            data-unfold-duration="500">
                        <i class="ec ec-close-remove"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->


            </div>
        </div>
    </div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
   data-position='{"bottom": 150, "right": 15 }'
   data-type="fixed"
   data-offset-top="400"
   data-compensation="#header"
   data-show-effect="slideInUp"
   data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="/assets_main/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets_main/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/assets_main/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets_main/vendor/bootstrap/bootstrap.min.js"></script>



<!-- JS Implementing Plugins -->
<script src="/assets_main/vendor/appear.js"></script>
<script src="/assets_main/vendor/jquery.countdown.min.js"></script>
<script src="/assets_main/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/assets_main/vendor/svg-injector/dist/svg-injector.min.js"></script>
<script src="/assets_main/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets_main/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets_main/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets_main/vendor/typed.js/lib/typed.min.js"></script>
<script src="/assets_main/vendor/slick-carousel/slick/slick.js"></script>
<script src="/assets_main/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/assets_main/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>


<!-- JS Electro -->
<script src="/assets_main/js/hs.core.js"></script>
<script src="/assets_main/js/components/hs.range-slider.js"></script>
<script src="/assets_main/js/components/hs.countdown.js"></script>
<script src="/assets_main/js/components/hs.header.js"></script>
<script src="/assets_main/js/components/hs.hamburgers.js"></script>
<script src="/assets_main/js/components/hs.unfold.js"></script>
<script src="/assets_main/js/components/hs.focus-state.js"></script>
<script src="/assets_main/js/components/hs.malihu-scrollbar.js"></script>
<script src="/assets_main/js/components/hs.validation.js"></script>
<script src="/assets_main/js/components/hs.fancybox.js"></script>
<script src="/assets_main/js/components/hs.onscroll-animation.js"></script>
<script src="/assets_main/js/components/hs.slick-carousel.js"></script>
<script src="/assets_main/js/components/hs.show-animation.js"></script>
<script src="/assets_main/js/components/hs.svg-injector.js"></script>
<script src="/assets_main/js/components/hs.go-to.js"></script>
<script src="/assets_main/js/components/hs.selectpicker.js"></script>


<!-- CUSTOM -->
<script src="/assets_main/js/theme-custom.js"></script>


<script>


    var arrBrands = [];
    var arrType = "";
    var arrCategory = "";

    var availableTags = [
<?php
$shops = \APP\models\Panel::getShops(['limit' => 100]);
        foreach ($shops as $key=>$val){
            echo '"'.$val['name'].'",';
        }
        ?>


    ];

    function getUrlParams(url = location.search){
        var regex = /[?&]([^=#]+)=([^&#]*)/g, params = {}, match;
        while(match = regex.exec(url)) {
            params[match[1]] = match[2];
        }
        return params;
    }

    autocomplete(document.getElementById("search"), availableTags);

    function ShowFilter() {

        history.pushState({}, '', "?mobile=true");
        $("#hideF").show(300);
        $("#showF").hide(300);
        $("#GroupContainer").removeClass('d-none d-sm-block');
        return true;

    }

    function HideFilter() {
        history.pushState({}, '', "?mobile=false");
        $("#showF").show(300);
        $("#hideF").hide(300);
        $("#GroupContainer").addClass('d-none d-sm-block');
        return true;

    }

    function ChangeFilter() {
        str = getFilterParamsParams();

        if (arrType != ""){
            updateFilter(str);
            return true;
        }


        getparam = getUrlParams();

        if (getparam.mobile == "undefined") getparam.mobile = false;

        if (arrBrands.length == 0)   window.location.href = '/promocode/vse/' + arrCategory + '?mobile=' + getparam.mobile;
        if (arrBrands.length == 1) window.location.href = '/promocode/' + arrBrands + '/' + arrCategory+ '?mobile=' + getparam.mobile;
        if (arrBrands.length > 1) updateFilter(str);

        return true;

    }

    function changePageSearch(page) {

        let query = $("#search").val();

    }

    function openWindow( url )
    {
        window.open(url, '_blank');
        window.focus();
    }



    function changePage(page){

       str = getFilterParamsParams ();

        
        $('#CouponContainer').empty();

        $.ajax(
            {
                url : document.location.pathname,
                type: 'POST',
                data: str + '&page=' + page,
                cache: false,
                success: function( coupons ) {

                    $('#CouponContainer').append(coupons);
                    window.scrollTo(0, 0);


                }
            }
        );


    }




    function clck(couponid)
    {


        // // Устанавливаем промокод в сессиию
        document.cookie = "runpromocode="+couponid;
        window.open("#");




    }





    function updateFilter(str) {

        function funcBeforeFilter(){
            $("#preloaderfilter").removeClass('d-none');
        }

        function funcBeforeResult(){
            $("#preloaderresult").removeClass('d-none');
        }


        $('#CouponContainer').empty();
        $.ajax(
            {
                url : document.location.pathname,
                type: 'POST',
                data: str,
                beforeSend: funcBeforeResult(),
                cache: false,
                success: function( coupons ) {

                    $("#preloaderresult").addClass('d-none');
                    $('#CouponContainer').show();
                    $('#CouponContainer').append(coupons);


                }
            }
        );

        $('#GroupContainer').hide();
        $('#GroupContainer').empty();
        $.ajax(
            {
                url : document.location.pathname,
                type: 'POST',
                data: str + '&arrCount=1',
                beforeSend: funcBeforeFilter,
                cache: false,
                success: function( filter ) {

                    $("#preloaderfilter").addClass('d-none');
                    $('#GroupContainer').show();
                    $('#GroupContainer').append(filter);


                }
            }
        );



    }


    function getFilterParamsParams() {
        arrBrands = [];
        arrType = "";
        arrCategory = "";


        $("input[name='companies']:checked").each(function(){ arrBrands.push($(this).prop('title')); });
        arrType = $('select[name=type]').val();
        arrCategory = $('select[name=category]').val();
        str =  '&arrBrands=' + arrBrands + '&arrType=' + arrType + '&arrCategory=' + arrCategory;
        return str;

    }





        // Очищаем форму при возращении
    $(window).bind("pageshow", function() {
        $("#query").val('');
    });
    // Очищаем форму при возращении



</script>




<!-- JS Plugins Init. -->
<script>




    $(window).on('load', function () {

        <?php if (!empty($_COOKIE['runpromocode'])): ?>
        document.cookie = "runpromocode=";
        $('#couponmodal').modal('show');
        <?php endif;?>







        getparam = getUrlParams();

            if ( getparam.mobile === "true"){
                $("#hideF").show();
                $("#showF").hide();
                $("#GroupContainer").removeClass('d-none d-sm-block');
            }

        if ( getparam.mobile === "false"){
            $("#showF").show();
            $("#hideF").hide();
            $("#GroupContainer").addClass('d-none d-sm-block');
        }




        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            direction: 'horizontal',
            pageContainer: $('.container'),
            breakpoint: 1199.98,
            hideTimeOut: 0
        });

        // initialization of svg injector module
        $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of countdowns
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
            yearsElSelector: '.js-cd-years',
            monthsElSelector: '.js-cd-months',
            daysElSelector: '.js-cd-days',
            hoursElSelector: '.js-cd-hours',
            minutesElSelector: '.js-cd-minutes',
            secondsElSelector: '.js-cd-seconds'
        });

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of forms
        $.HSCore.components.HSFocusState.init();

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#signupPassword'
                }
            }
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of fancybox
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of hamburgers
        $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            beforeClose: function () {
                $('#hamburgerTrigger').removeClass('is-active');
            },
            afterClose: function() {
                $('#headerSidebarList .collapse.show').collapse('hide');
            }
        });

        $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();

            var target = $(this).data('target');

            if($(this).attr('aria-expanded') === "true") {
                $(target).collapse('hide');
            } else {
                $(target).collapse('show');
            }
        });

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');
    });
</script>
</body>
</html>