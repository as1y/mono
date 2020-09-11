
<div class="category-wrapper">
    <div class="container">
        <div class="row">

            <?php

            renderFilter([
                'catalogCategories' => $catalogCategories,
                'catalogCompany' => $catalogCompany,
                'catalogType' => $catalogType
            ]);

            ?>

        </div>


        <div class="row col-md-12" id="CouponContainer">



            <?php

            generateResult($coupons, $PAGESLIST, $catalogCategories, $query = "", $catalogCompany);

            if (!empty($_COOKIE['runmodal']))  $_SESSION['POST'] = [];


            ?>





            </div>


        </div>
    </div>
</div>

