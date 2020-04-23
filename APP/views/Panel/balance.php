<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">БАЛАНС</h5>

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-3">


                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-wallet icon-3x text-success-400"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="font-weight-semibold mb-0"><?=\APP\core\base\Model::getBal()?></h3>
                                <span class="text-uppercase font-size-sm text-muted">РУБЛЕЙ</span>
                            </div>
                        </div>
                    </div>

                <a href="#" type="button" class="btn btn-success"><i class="icon-plus-circle2 mr-2"></i>ПОПОЛНИТЬ БАЛАНС</a>

            </div>

        <?php if ($_SESSION['ulogin']['role'] == "O"):?>

            <div class="col-md-3">
                <a href="/panel/cashout/" type="button" class="btn btn-warning"><i class="icon-credit-card mr-2"></i>Вывести средства</a>
            </div>
            <?php endif;?>



        </div>




        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>ДАТА</th>
                <th>СУММА</th>
                <th>ТИП</th>
                <th>КОММЕНТАРИЙ</th>
                <th>СТАТУС</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($balancelog as $key=>$val):?>

                <tr>
                    <td><?=$val['date']?></td>
                    <td class="text-center"><b><?=$val['sum']?></b></td>
                    <td class="text-center"><?=$val['type']?></td>
                    <td class="text-center"><?=$val['comment']?></td>
                    <td class="text-center"><?=paystatus($val['status'])?></td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>



</div>
