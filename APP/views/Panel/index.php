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

    

                        <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">

                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                    <i class="icon-alarm-add"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                                    <span class="text-muted">total tickets</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                    <i class="icon-alarm-add"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                                    <span class="text-muted">total tickets</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                    <i class="icon-spinner11"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                                    <span class="text-muted">response time</span>
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



