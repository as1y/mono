<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
<!--                <nav aria-label="breadcrumb">-->
<!--                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">-->
<!--                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Главная</a></li>-->
<!--                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Smart Phones & Tablets</li>-->
<!--                    </ol>-->
<!--                </nav>-->
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
<!--            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">-->
            <div class="col-xl-3 col-wd-2gdot5">

<!--                -->
<!--                <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">-->
<!--                  ТУТ ЧТ-ТО-->
<!--                </div>-->


                <div class="mb-6">


                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">СКИДКИ, ПРОМОКОДЫ</h3>
                    </div>


                    <div id="showF" class="d-lg-none .d-xl-block text-center">
                        <a href="#" onclick="ShowFilter()"  class="btn px-4 btn-danger py-2 rounded-lg">▼ ПОКАЗАТЬ ФИЛЬТР ▼</a>
                        <hr>
                    </div>


<!--                    ФИЛЬТР-->
<!--                    Прелоадер-->
                    <img id="preloaderfilter" class="d-none" src="/assets_main/svg/preloaders/circle-preloader.svg">
                    <div id="GroupContainer" class="bg-white rounded-sm border border-width-2 border-primary py-2 px-2 min-width-46 d-none d-sm-block text-center">


                        <?php


                        renderFilter([
                            'catalogCategories' => $catalogCategories,
                            'catalogCompany' => $catalogCompany,
                            'catalogType' => $catalogType
                        ]);



                        ?>


                    </div>

                    <div id="hideF" style="display: none" class="text-center">
                        <hr>
                        <a href="#" onclick="HideFilter()" class="btn px-4 btn-danger py-2 rounded-lg" >▲ СКРЫТЬ ФИЛЬТР ▲</a>
                    </div>




                </div>

            </div>



            <img id="preloaderresult" class="d-none" src="/assets_main/svg/preloaders/circle-preloader.svg">
            <div id="CouponContainer" class="col-xl-9 col-wd-9gdot5">


                <?php

                generateResult($coupons, $PAGESLIST, $catalogCategories, $query = "", $catalogCompany);

                if (!empty($_COOKIE['runmodal']))  $_SESSION['POST'] = [];


                ?>


            </div>
        </div>





    </div>
</main>
