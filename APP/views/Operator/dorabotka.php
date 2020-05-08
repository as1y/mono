<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ДОРАБОТКА</h5>

    </div>

    <div class="card-body">

        <table  class="table datatable-basic">
            <thead>
            <tr>
                <th><b>ПРОЕКТ</b></th>
                <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
                <th><b>РЕЗУЛЬТАТ</b></th>
                <th><b>ЗАПИСИ</b></th>
                <th><b>ПРИЧИНА ДОРАБОТКИ</b></th>
            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($contactdorabotka as $key=>$val):



                $userinfo = $val->users;
                $company = $val->company;
                $idcontact = $val->contact_id;

                ?>
                <tr>
                    <td class="text-center">

                        <?=$company['company']?>


                    </td>


                    <td>

                        <?php
                        rendercontactinfo($val);
                        ?>


                    </td>
                    <td>
                        <b>ДАТА: </b><?=$val['datacall']?><br>
                        <?php
                        renderresult($val['resultmass']);
                        ?>

                    </td>
                    <td> <?= raskladkazapisi($allzapis[$val['id']]['data'])?></td>
                    <td>

                        <i> <?=$val['dorabotkacomment']?>  </i><hr>
                        <a href="/operator/call/?id=<?=$val['company_id']?>&perezvon=<?=$val['id']?>" type="button" class="btn btn-danger"><i class="icon-phone-wave mr-2"></i>ЗВОНИТЬ</a>


                    </td>


                </tr>
            <?php endforeach;?>




            </tbody>
        </table>
    </div>



</div>


