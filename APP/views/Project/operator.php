

<?php



?>


<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h5 class="card-title">ЗАЯВКИ В ПРОЕКТ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic text-center">
                    <thead>
                    <tr>
                        <th>Имя Фамилия</th>
                        <th>Информация</th>
                        <th>Звонков</th>
                        <th>Демо</th>
                        <th>Действие</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($operators['OperatoriNaModeracii'] as $key=>$val):?>
                        <tr>
                            <td>
                                <img src="<?=$val['avatar']?>" width="38" height="38" class="rounded-circle" alt="">

                                <a href="<?=generateprofilelink($val)?>" class="breadcrumb-item" target="_blank">
                                <?=$val['username']?>
                                </a>

                            </td>
                            <td class="text-center"><?=$val['aboutme']?></td>
                            <td class="text-center"><?= (empty($val['totalcall'])) ? 0 : $val['totalcall']  ?></td>
                            <td class="text-center">
                            <audio controls src="/<?=AudioUploadPath.$val['audio']?>"></audio>
                            </td>

                            <td class="text-center">

                                <a href="/project/operator/?id=<?=$company['id']?>&idoper=<?=$val['id']?>&action=accept" type="button" class="btn btn-success">Пропустить</a>
                                <a href="/project/operator/?id=<?=$company['id']?>&idoper=<?=$val['id']?>&action=reject" type="button" class="btn btn-danger">Отклонить</a>

                            </td>


                        </tr>
                    <?php endforeach;?>








                    </tbody>
                </table>
            </div>



        </div>



    </div>
</div>



<div class="row">


    <div class="col-md-12">

        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h5 class="card-title">ОПЕРАТОРЫ НА ПРОЕКТЕ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic text-center">
                    <thead>
                    <tr>
                        <th>Имя Фамилия</th>
                        <th>Информация</th>
                        <th>Звонков</th>
                        <th>Демо</th>
                        <th>Действие</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($operators['OperatoriNaProekte'] as $key=>$val):?>
                        <tr>
                            <td>
                                <img src="<?=$val['avatar']?>" width="38" height="38" class="rounded-circle" alt="">
                                <?=$val['username']?></td>
                            <td class="text-center"><?=$val['aboutme']?></td>
                            <td class="text-center"><?= (empty($val['totalcall'])) ? 0 : $val['totalcall']  ?></td>
                            <td class="text-center"><audio controls src="/<?=AudioUploadPath.$val['audio']?>"></audio></td>

                            <td class="text-center">

                                <a href="/project/operator/?id=<?=$company['id']?>&idoper=<?=$val['id']?>&action=reject" type="button" class="btn btn-danger">ОТКЛЮЧИТЬ</a>

                            </td>


                        </tr>
                    <?php endforeach;?>








                    </tbody>
                </table>
            </div>



        </div>



    </div>




</div>