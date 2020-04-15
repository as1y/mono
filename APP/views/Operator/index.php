<div class="card text-center">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">МОЙ СТАТУС</b></h6>



    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-6 col-xl-3">

                <div class="card-body">
                    <? if($acesscall === false):?>

                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                        <h5 class="card-title">ВЫ НЕ МОЖЕТЕ ЗВОНИТЬ</h5>
                        <p class="mb-3">Выполните условия и запустите проект</p>
                        <ul class="mb-0">
                            <li>Загрузите Аватар</li>
                            <li>Добавьте запись голоса</li>
                            <li>Заполните информацию о себе</li>
                            <li>Подтвердите E-mail</li>
                        </ul>


                    <?else:?>

                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>

                        <h5 class="card-title">ВЫ ДОПУЩЕНЫ К ЗВОНКАМ</h5>
                        <!--                            <p class="mb-3">Изменить статус проекта</p>-->




                    <?endif;?>


                </div>


            </div>


            <div class="col-sm-6 col-xl-3">


                <div class="card-body">

                    <? if($status['contact'] === FALSE):?>
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>


                    <h5 class="card-title">Ваша презентация </h5>
                    <p class="mb-3">Заполните информацию в профиле "Моя перезнтация"</p>
                    <a href="/panel/profile/" class="btn bg-success"><i class="icon-plus3 ml-2"></i> ДОБАВИТЬ</a>




                </div>


            </div>
            <div class="col-sm-6 col-xl-3">


                <div class="card-body">

                    <? if($status['balance'] === FALSE):?>
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>

                    <h5 class="card-title">Аватар</h5>
                    <p class="mb-3">Загрузите Аватар в профиле</p>
                    <a href="/panel/profile/" class="btn bg-success"><i class="icon-plus3 ml-2"></i> ДОБАВИТЬ</a>

                </div>


            </div>


            <div class="col-sm-6 col-xl-3">


                <div class="card-body">


                    <? if($status['script'] === FALSE):?>
                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>


                    <h5 class="card-title">СКРИПТ</h5>
                    <p class="mb-3">Скрипт разговора должен быть проработан</p>

                    <a href="/project/script/?id=<?=$_GET['id']?>" class="btn bg-success"><i class="icon-book ml-2"></i> РЕДАКТИРОВАТЬ</a>

                </div>


            </div>
        </div>

    </div>
</div>