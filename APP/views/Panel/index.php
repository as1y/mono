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
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, 19px, 0px);">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">One more separated line</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-3">

                        <img class="card-img-top" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="50" height="200" alt="">


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

                        <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">

                            <a href="/project/?id=140" class="btn btn-success mr-5 mb-5">
                                <i class="si si-settings mr-5"></i>УПРАВЛЕНИЕ <i class="si si-settings mr-5"></i>
                            </a>


                        </div>


                    </div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



