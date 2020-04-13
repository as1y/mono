<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">МОИ ПРОЕКТЫ</h5>

    </div>

    <div class="card-body">



        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Компания</th>
                <th>Продукт</th>
                <th>Цель</th>
                <th>Оплата</th>
                <th>Бонус</th>
                <th>Статус</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>

            <?php foreach ($mycompanies as $key=>$val):?>

                <tr>
                    <td><?=$val['company']?></td>
                    <td class="text-center">
                        <?=obrezanie($val['nameproduct'], 70)?>
                    </td>
                    <td class="text-center">

                        <?=companytype($val['type'])?>

                    </td>
                    <td class="text-center">


                        <b> <?=$val['priceresult']?> руб.</b>

                    </td>
                    <td class="text-center">
                        За <?=$val['mincall']?> звонков <b> <?=$val['bonuscall']?> руб.</b>
                    </td>

                    <td class="text-center">

                        <?php
                        $mystatus = json_decode($val['operators'],true)[$_SESSION['ulogin']['id']];
                        ?>
                        <h4><?=passoperator($mystatus)?></h4>

                    </td>


                    <td class="text-center">

                        <?php if ($mystatus == 2):?>

                        <a href="/operator/call/?id=<?=$val['id']?>" type="button" class="btn btn-danger"><i class="icon-phone-wave mr-2"></i>ЗВОНИТЬ</a>
                         <?php endif;?>


                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>


</div>



