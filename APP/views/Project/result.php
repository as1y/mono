<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">РЕЗУЛЬТАТ НА ПРОВЕРКЕ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic">
                    <thead>
                    <tr>
                        <th><b>ОПЕРАТОР</b></th>
                        <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
                        <th><b>РЕЗУЛЬТАТ</b></th>
                        <th><b>ЗАПИСИ</b></th>
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
                            <td class="text-center">

                                <img src="<?=$userinfo['avatar']?>" width="38" height="38" class="rounded-circle" alt=""><br>
                                <?=$userinfo['username']?>


                            </td>


                            <td>

                                <?php
                                rendercontactinfo($val['contactinfo']);
                                ?>


                            </td>
                            <td>
                                <b>ДАТА: </b><?=$val['date']?><br>
                                <?php
                                renderresult($val['data']);
                                ?>

                            </td>
                            <td>ЗАПИСЬ</td>
                            <td >

                                <a href="/project/result/?id=<?=$company['id']?>&idresult=<?=$val['id']?>&action=accept" type="button" class="btn btn-success">ПОДТВЕРДИТЬ</a><br><br>
                                <a href="/project/result/?id=<?=$company['id']?>&idresult=<?=$val['id']?>&action=reject" type="button" class="btn btn-danger">ОТКЛОНИТЬ</a><br><br>



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
            <div class="card-header header-elements-inline">
                <h5 class="card-title">РЕЗУЛЬТАТЫ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic">
                    <thead>
                    <tr>
                        <th><b>ОПЕРАТОР</b></th>
                        <th><b>ДАТА</b></th>
                        <th><b>РЕЗУЛЬТАТ</b></th>
                        <th><b>ЗАПИСИ</b></th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    foreach ( $company->ownResultList as $key=>$val):

                        if ($val['id'] == 0) continue;
                        if ($val['status'] != 1 ) continue;

                        $userinfo = $val->users;
                        $idcontact = $val->contact_id;

                        ?>
                        <tr>
                            <td>

                                <img src="<?=$userinfo['avatar']?>" width="38" height="38" class="rounded-circle" alt=""><br>
                                <?=$userinfo['username']?>


                            </td>

                            <td>     <b>ДАТА: </b><?=$val['date']?><br></td>

                            <td>

                                <?php
                                renderresult($val['data']);
                                ?>

                            </td>
                            <td>ЗАПИСЬ</td>



                        </tr>
                    <?php endforeach;?>




                    </tbody>
                </table>
            </div>



        </div>



    </div>



</div>


