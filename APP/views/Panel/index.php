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
            <div class="card-body justify-content-center text-center">

                <div class="row">

                    <div class="col-md-2">

                        <img class="card-img-top" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="50" height="150" alt="">


                    </div>




                    <div class="col-md-8">

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


                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Basic components
									</span>
                                <span class="badge bg-success ml-auto">New</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action active">
									<span class="font-weight-semibold">
										<i class="icon-alignment-unalign mr-2"></i>
										Data tables extensions
									</span>
                                <span class="badge bg-indigo-400 badge-pill ml-auto">38</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-cube3 mr-2"></i>
										Application pages
									</span>
                                <span class="badge bg-pink-400 ml-auto">Fixed</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action disabled">
									<span class="font-weight-semibold">
										<i class="icon-transmission mr-2"></i>
										Horizontal navigation
									</span>
                                <span class="badge bg-dark badge-pill ml-auto">40</span>
                            </a>
                        </ul>

                    </div>

                    <div class="col-md-2">

                        <div>
                            <a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
                        </div>


                    </div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



