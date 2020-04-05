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

                        <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <div id="tickets-status"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path style="fill: rgb(41, 182, 246);" d="M1.1634144591899855e-15,19A19,19 0 0,1 -12.326087772183463,-14.459168725498339L-6.163043886091732,-7.229584362749169A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" transform=""></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path style="fill: rgb(102, 187, 106);" d="M-12.326087772183463,-14.459168725498339A19,19 0 0,1 14.331188229058796,-12.474656065130077L7.165594114529398,-6.237328032565038A9.5,9.5 0 0,0 -6.163043886091732,-7.229584362749169Z" transform=""></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path style="fill: rgb(239, 83, 80);" d="M14.331188229058796,-12.474656065130077A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.165594114529398,-6.237328032565038Z" transform="translate(0,0)"></path></g></g></svg></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
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

                            <div>
                                <a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
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



