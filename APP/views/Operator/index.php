<?php

show($statuscall);


?>


<div class="card text-center">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">МОЙ СТАТУС</b></h6>



    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-6 col-xl-3">

                <div class="card-body">
                    <? if($statuscall['acess'] === false):?>

                        <i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
                        <h5 class="card-title">ВЫ НЕ МОЖЕТЕ ЗВОНИТЬ</h5>
                        <div class="list-feed">


                            <div class="list-feed-item border-warning-400">
                                Подтвердите E-mail
                            </div>

                            <div class="list-feed-item border-warning-400">
                               Заполните информацию о себе
                            </div>

                            <div class="list-feed-item border-warning-400">
                               Загрузите аватар
                            </div>

                            <div class="list-feed-item border-warning-400">
                               Запишите аудио презентацию
                            </div>

                        </div>

                    <?else:?>

                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>

                        <h5 class="card-title">ВЫ ДОПУЩЕНЫ К ЗВОНКАМ</h5>
                        <!--                            <p class="mb-3">Изменить статус проекта</p>-->




                    <?endif;?>


                </div>


            </div>


            <div class="col-sm-6 col-xl-3">


                <div class="card-body">

                    <? if($statuscall['about'] === false):?>
                        <i class="icon-cross2 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3"></i>
                        <p class="mb-3">Заполните информацию о себе в профиле</p>
                        <a href="/panel/profile/" class="btn bg-success"><i class="icon-plus3 ml-2"></i> ДОБАВИТЬ</a>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>


                    <h5 class="card-title">Информация о себе </h5>





                </div>


            </div>
            <div class="col-sm-6 col-xl-3">


                <div class="card-body">

                    <? if($statuscall['avatar'] === false):?>
                        <i class="icon-cross2 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3"></i>
                        <p class="mb-3">Загрузите Аватар в профиле</p>
                        <a href="/panel/profile/" class="btn bg-success"><i class="icon-image2 ml-2"></i> ДОБАВИТЬ</a>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>

                    <h5 class="card-title">Аватар</h5>


                </div>


            </div>


            <div class="col-sm-6 col-xl-3">


                <div class="card-body">


                    <? if($statuscall['audio'] === false):?>
                        <i class="icon-cross2 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3"></i>
                        <p class="mb-3">Запишите аудио презентацию</p>
                        <a href="/project/profile/?>" class="btn bg-success"><i class="icon-mic2 ml-2"></i> ЗАПИСАТЬ</a>
                    <?else:?>
                        <i class="icon-checkmark icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
                    <?endif;?>


                    <h5 class="card-title">Аудио презентация</h5>


                </div>


            </div>
        </div>

    </div>
</div>