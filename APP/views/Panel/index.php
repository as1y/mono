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
            <div class="card-body justify-content-center text-center-end">

                <div class="row">

                    <div class="col-md-2 align-self-center">

                        <img class="card-img-top" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="50" height="150" alt="">


                    </div>




                    <div class="col-md-8">

                        <div class="row text-center">
                            <div class="col-4">
                                <p><i class="icon-users2 icon-2x d-inline-block text-info"></i></p>
                                <h5 class="font-weight-semibold mb-0">2,345</h5>
                                <span class="text-muted font-size-sm">users</span>
                            </div>

                            <div class="col-4">
                                <p><i class="icon-point-up icon-2x d-inline-block text-warning"></i></p>
                                <h5 class="font-weight-semibold mb-0">3,568</h5>
                                <span class="text-muted font-size-sm">clicks</span>
                            </div>

                            <div class="col-4">
                                <p><i class="icon-cash3 icon-2x d-inline-block text-success"></i></p>
                                <h5 class="font-weight-semibold mb-0">$9,693</h5>
                                <span class="text-muted font-size-sm">revenue</span>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Basic components
									</span>
                                <span class="badge bg-success ml-auto">New</span>
                            </a>
                        </ul>

                        
                    </div>

                    <div class="col-md-2 align-self-center">

                        <div class="media">

                        <div>
                            <a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> УПРАВЛЕНИЕ</a>
                        </div>


                    </div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



