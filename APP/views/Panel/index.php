<?php

//show($company);

?>


<?php foreach ($company as $row): ?>

    <div class="col-lg-12">

        <!-- Icon button -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Проект: <b><?=$row['name']?></b></h6>
                <div class="header-elements">
                    <button type="button" class="btn bg-success-400 btn-icon">РЕДАКТИРОВАТЬ</button>
                </div>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-3">

                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" height="100" width="200">


                    </div>

                    <div class="col-md-6">

                        <div class="row text-center">
                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">5,689</h5>
                                    <span class="text-muted font-size-sm">new orders</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">32,568</h5>
                                    <span class="text-muted font-size-sm">this month</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">$23,464</h5>
                                    <span class="text-muted font-size-sm">expected profit</span>
                                </div>
                            </div>
                        </div>
                        


                    </div>

                    <div class="col-md-3">

                        <a href="/project/?id=140" class="btn btn-success mr-5 mb-5">
                            <i class="si si-settings mr-5"></i>УПРАВЛЕНИЕ <i class="si si-settings mr-5"></i>
                        </a>

                    </div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



