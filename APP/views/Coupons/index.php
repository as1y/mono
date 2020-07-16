<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Smart Phones & Tablets</li>
                    </ol>
                </nav>
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



<!--                    ФИЛЬТР-->
                    <div id="GroupContainer">

                        <?=renderFilter([
                            'catalogCategories' => $catalogCategories,
                            'catalogCompany' => $catalogCompany,
                            'catalogType' => $catalogType
                        ]);?>

                    </div>




                </div>

            </div>






            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Shop-control-bar Title -->
                <div class="d-block d-md-flex flex-center-between mb-3">
                    <h3 class="font-size-25 mb-2 mb-md-0">Smart Phones & Tablets</h3>
                    <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                </div>
                <!-- End shop-control-bar Title -->




                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">


                        <ul id="CouponContainer" class="row list-unstyled products-group no-gutters">

                            <?=generetuCouponinCode($coupons)?>

                        </ul>
                    </div>



                </div>
                <!-- End Tab Content -->




                <!-- End Shop Body -->
                <!-- Shop Pagination -->
                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                    <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
                    <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link current" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
                <!-- End Shop Pagination -->
            </div>
        </div>





    </div>
</main>