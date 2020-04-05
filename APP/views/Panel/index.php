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




                    <div class="col-md-6">

                        <ul class="list-group list-group-flush border-bottom">

                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Новых звонков на одобрение
									</span>
                                <span class="badge bg-success ml-auto">0</span>
                            </a>


                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Новых операторов на одобрение
									</span>
                                <span class="badge bg-success ml-auto">0</span>
                            </a>


                            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Нужен ваш ответ
									</span>
                                <span class="badge bg-success ml-auto">0</span>
                            </a>




                        </ul>
<br>

                        <div class="row text-center">
                            <div class="col-4">
                                <p><i class="icon-users2 icon-2x d-inline-block text-info"></i></p>
                                <h5 class="font-weight-semibold mb-0">0</h5>
                                <span class="text-muted font-size-sm">Звонков сегодня</span>
                            </div>

                            <div class="col-4">
                                <p><i class="icon-point-up icon-2x d-inline-block text-warning"></i></p>
                                <h5 class="font-weight-semibold mb-0">0</h5>
                                <span class="text-muted font-size-sm">Успешных</span>
                            </div>

                            <div class="col-4">
                                <p><i class="icon-cash3 icon-2x d-inline-block text-success"></i></p>
                                <h5 class="font-weight-semibold mb-0">0</h5>
                                <span class="text-muted font-size-sm">Конверсия</span>
                            </div>
                        </div>




                    </div>


                    <div class="col-md-2 text-center align-self-center">
                        <i class="icon-book icon-2x text-danger-400 border-danger-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="card-title">НЕ РАБОТАЕТ</h5>

                    </div>


                    <div class="col-md-2 text-center align-self-center">

                        
                        <div>
                            <a href="/project/?id=<?=$row['id']?>" class="btn bg-success-300"><i class="icon-cog2 mr-2"></i> УПРАВЛЕНИЕ</a>
                        </div>


                    </div>


                </div>




            </div>
        </div>
        <!-- /icon button -->


    </div>




<?php endforeach;?>



