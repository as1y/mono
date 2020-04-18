<div class="col-md-12">

    <div class="row">

        <div class="col-xl-3 col-sm-6">
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="font-weight-semibold mb-0 mt-1"><?= $_SESSION['ulogin']['username'] ?></h6>

                    <span class="d-block text-muted"><?= rendertypeaccount($_SESSION['ulogin']['role']) ?></span>


                </div>



                <a href="#" class="d-inline-block mb-3">
                    <img src="<?=$_SESSION['ulogin']['avatar']?>" class="rounded-round"
                         width="150" height="150" alt="">
                </a>

                <a href="#" type="button" class=" btn btn-info"><i class="icon-eye mr-2"></i> Посмотреть профиль</a>
                <br>
                <a href="/panel/settings/" type="button" class=" btn btn-warning"><i class="icon-cog5 mr-2"></i> Настройки аккаунта</a>


            </div>


            <ul class="list-group  border-top">

                <a href="#" class="list-group-item list-group-item-action">
                <span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Рейтинг
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Всего звонков
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Успешных
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


            </ul>


        </div>
        <div class="col-xl-6 col-sm-6">
            <div class="card card-body text-center">
                <div class="mb-3">
                    <h6 class="font-weight-semibold mb-0 mt-1"><?= $_SESSION['ulogin']['username'] ?></h6>

                    <span class="d-block text-muted"><?= rendertypeaccount($_SESSION['ulogin']['role']) ?></span>


                </div>



                <a href="#" class="d-inline-block mb-3">
                    <img src="<?=$_SESSION['ulogin']['avatar']?>" class="rounded-round"
                         width="150" height="150" alt="">
                </a>

                <a href="#" type="button" class=" btn btn-info"><i class="icon-eye mr-2"></i> Посмотреть профиль</a>
                <br>
                <a href="/panel/settings/" type="button" class=" btn btn-warning"><i class="icon-cog5 mr-2"></i> Настройки аккаунта</a>


            </div>


            <ul class="list-group  border-top">

                <a href="#" class="list-group-item list-group-item-action">
                <span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Рейтинг
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Всего звонков
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Успешных
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


            </ul>


        </div>

        <div class="col-xl-3 col-sm-6">


            <div class="card" id="audiopersend">

                <div class="card-header bg-dark text-white header-elements-inline">
                    <h6 class="card-title">АУДИО ПРЕЗЕНТАЦИЯ</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">



                        <div class="col-md-6 text-center">

                            <div id="audio"></div>


                            <span id="record" style="display: none;" class="badge badge-warning">ИДЕТ ЗАПИСЬ!<br></span><br>
                            <button type="button" id="start" class="btn btn-success"><i class="icon-mic2 mr-2"></i> НАЧАТЬ ЗАПИСЬ</button>
                            <button type="button" id="stop" style="display: none;" class="btn btn-danger"><i class="icon-mic-off2 mr-2"></i> СТОП</button>


                            <div id="after" style="display: none;" >
                                <hr>
                                <button type="button" id="saverecord" class="btn btn-success"><i class="icon-checkmark mr-2"></i> СОХРАНИТЬ ЗАПИСЬ</button>
                                <a href="/panel/profile/"  class="btn btn-secondary"><i class="icon-reload-alt mr-2"></i> СБРОС</a>
                            </div>

                        </div>



                        <div class="col-md-6">
                            <span class="badge-secondary">ЗАПИСЬ АУДИО ПРЕЗЕНТАЦИИ</span><br>

                            1. Расскажите коротко о себе. Эту презентацию будут слушать клиенты и принимать решения о допуске к работе в проектах.<br>
                            2. Далее проговорите скороговорку:<br>
                            <?=skorogovorka()?>



                        </div>




                    </div>

                </div>

            </div>


        </div>


    </div>








</div>