<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">РЕЗУЛЬТАТ НА ПРОВЕРКЕ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic text-center">
                    <thead>
                    <tr>
                        <th><b>ID</b></th>
                        <th><b>Дата</b></th>
                        <th><b>Оператор</b></th>
                        <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
                        <th><b>РЕЗУЛЬТАТ</b></th>
                        <th><b>ЗАПИСЬ</b></th>
                        <th><b>ДЕЙСТВИЯ</b></th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    foreach ( $company->ownResultList as $key=>$val):

                        if ($val['id'] == 0) continue;
                        if ($val['status'] != 0 ) continue;

                        $userinfo = $val->users;
                        $idcontact = $val->contact_id;

                        ?>
                        <tr>
                            <td>
                                #<?=$val['id']?>
                            </td>
                            <td class="text-center"><?=$val['date']?></td>
                            <td class="text-center">
                                <img src="<?=$userinfo['avatar']?>" width="38" height="38" class="rounded-circle" alt="">
                                <?=$userinfo['username']?>
                            </td>
                            <td class="text-center">

                                <?php

                                rendercontactinfo($val['contactinfo']);

                                ?>


                            </td>
                            <td class="text-center">РЕЗУЛЬТАТ</td>
                            <td class="text-center">ЗАПИСЬ</td>
                            <td class="text-center">
                                <a href="/project/operator/?id=<?=$company['id']?>&idresult=<?=$val['id']?>&action=accept" type="button" class="btn btn-success">ПОДТВЕРДИТЬ</a>
                                <a href="/project/operator/?id=<?=$company['id']?>&idresult=<?=$val['id']?>&action=reject" type="button" class="btn btn-danger">ОТКЛОНИТЬ</a>
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
ГОТОВЫЕ РЕЗУЛЬТАТЫ

    </div>



</div>


