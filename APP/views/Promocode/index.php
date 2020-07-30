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
//
//                show($_COOKIE);
//                show($_SESSION);

            if (empty($_COOKIE['runpromocode'])){

                generateResult($coupons, $PAGESLIST, $catalogCategories, $query = "", $catalogCompany);

            }


                if (!empty($_COOKIE['runpromocode'])  ){


                    generateResult($coupons, $PAGESLIST, $catalogCategories, $query = "", $catalogCompany);


                    // Удаляем КУКУ

                    $_SESSION['POST'] = [];
                    // Генерируем попап
                   $couponmodal =\APP\models\Panel::loadOneCoupon($_COOKIE['runpromocode']);

                        //Загружаем купон по ID

                    // Функция открытия попапа
                    // Генерируем попап




                }


                ?>


            </div>
        </div>





    </div>
</main>

<?php if (!empty($_COOKIE['runpromocode'])): ?>

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


            <div class="modal-body text-center">

                <?php if (!empty($couponmodal['short_name'])):?>
                    <span  class="font-size-12 "><?=obrezanie($couponmodal['short_name'], 350)?><br><br></span>
                <?php endif; ?>



                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-2"></div>
                        <div class="col-md-8 ">
                            <div class="form-group">
                                <input type="text" style="border-radius: unset" onclick="copytext()" class="form-control px-4 text-center"  value="<?=$couponmodal['promocode']?>"  id="myInput" >
                            </div>
                            <button type="button"  onclick="copytext()" class="btn btn-warning">СКОПИРОВАТЬ ПРОМОКОД</button>

                        </div>
                        <div class="col-md-2"></div>
                    </div>


                </div>
                <hr>
                <span class="font-size-12 text-gray-8">Для Вашего удобства сайт магазина уже автоматически открыт в соседней вкладке.
                Вставьте промо-код в корзине выбранного магазина.</span>








            </div>





        </div>
    </div>
</div>
<?php endif;?>