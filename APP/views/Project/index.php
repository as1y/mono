
<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Статистика <b><?=$company['name']?></b></h6>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>
    <div class="card-body justify-content-center">

        <div class="row">
            <div class="col-sm-6 col-xl-3">


                <a href="#">

                    <div class="card card-body bg-indigo-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-phone2 icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">0</h3>
                                <span class="text-uppercase font-size-xs">Звонков</span>
                            </div>
                        </div>
                    </div>

                </a>


            </div>
            <div class="col-sm-6 col-xl-3">

                <a href="#">

                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-target2 icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">0</h3>
                                <span class="text-uppercase font-size-xs">Результатов</span>
                            </div>
                        </div>
                    </div>

                </a>

            </div>
            <div class="col-sm-6 col-xl-3">

                <a href="#">

                    <div class="card card-body bg-danger-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">0</h3>
                                <span class="text-uppercase font-size-xs">На модерации</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-crown icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>



            </div>
            <div class="col-sm-6 col-xl-3">

                <a href="">

                    <div class="card card-body bg-warning-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">0</h3>
                                <span class="text-uppercase font-size-xs">Конверсия</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-percent icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>


                </a>

            </div>
        </div>

    </div>
</div>




    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Управление <b><?=$company['name']?></b></h6>

            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>


        </div>
        <div class="card-body justify-content-center">

            <div class="row">
                <div class="col-sm-6 col-xl-3">


                    <div class="card-body">



                        <? if($status['company'] === false):?>

                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>


                                <?if ($company['status'] == 2):?>
                                    <h5 class="card-title">ЗВОНКИ НЕ ИДУТ</h5>
                                    <p class="mb-3">Выполните условия и запустите проект</p>
                                <?endif;?>

                                <?if ($company['status'] == 3):?>
                                    <div class="font-size-h4 font-w600"><div class="badge badge-info">НЕ РАБОЧЕЕ ВРЕМЯ</div></div>
                                    <div class="text-muted">Звонки сегодня запрещены</div>
                                <?endif;?>

                                <?if ($company['status'] == 4):?>
                                    <div class="font-size-h4 font-w600"><div class="badge badge-info">НЕ РАБОЧЕЕ ВРЕМЯ</div></div>
                                    <div class="text-muted">Звонки в данное время запрещены</div>
                                <?endif;?>

                                <?if ($company['status'] == 5):?>
                                    <div class="font-size-h4 font-w600"><div class="badge badge-info">ДОСТИГНУТ ДНЕВНОЙ ЛИМИТ</div></div>
                                    <div class="text-muted">Достигнут дневной лимит</div>
                                <?endif;?>


                        <a href="/project/?id=<?=$_GET['id']?>&action=play" class="btn bg-success">ЗАПУСК<i class="icon-arrow-right14 ml-2"></i></a>



                        <?else:?>


                            <form action="/project/stop/" method="post">
                                <div class="py-20 text-center">
                                    <div class="mb-20">
                                        <i class="fa fa-check fa-4x text-success"></i>
                                    </div>
                                    <div class="font-size-h4 font-w600"><div class="badge badge-success">ПРОЕКТ АКТИВЕН</div></div>
                                    <div class="text-muted">Статус проекта</div>
                                    <div class="pt-20">
                                        <a class="btn btn-sm btn-danger" id="pause" href="/project/?id=<?=$_GET['id']?>&action=stop">
                                            <i class="fa fa-stop mr-5"></i> ОСТАНОВИТЬ ПРОЕКТ
                                        </a>

                                    </div>
                                </div>
                            </form>
                        <?endif;?>









                    </div>


                </div>


                <div class="col-sm-6 col-xl-3">


                    <div class="card-body">
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                        <h5 class="card-title">Center alignment</h5>
                        <p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

                        <a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
                    </div>


                </div>
                <div class="col-sm-6 col-xl-3">


                    <div class="card-body">
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                        <h5 class="card-title">Center alignment</h5>
                        <p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

                        <a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
                    </div>


                </div>
                <div class="col-sm-6 col-xl-3">


                    <div class="card-body">
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                        <h5 class="card-title">Center alignment</h5>
                        <p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

                        <a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
                    </div>


                </div>
            </div>

        </div>
    </div>


