<?php

//show($company);

?>


<?php foreach ($company as $row): ?>

    <div class="col-lg-12">

        <!-- Icon button -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title"><?=$row['name']?></h6>
                <div class="header-elements">
                    <button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
                </div>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-3">ЛОГОТИП</div>

                    <div class="col-md-6">Статистика</div>

                    <div class="col-md-3">КНОПКА УПРАВЛЕНИЕ</div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



