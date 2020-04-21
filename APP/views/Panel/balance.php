<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Баланс</h5>

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
                                <h3 class="font-weight-semibold mb-0"><?=$_SESSION['ulogin']['bal']?></h3>
                                <span class="text-uppercase font-size-sm text-muted">РУБЛЕЙ</span>
                            </div>
                        </div>
                    </div>

                <a href="#" type="button" class="btn btn-success"><i class="icon-plus-circle2 mr-2"></i>ПОПОЛНИТЬ БАЛАНС</a>

            </div>`
            <div class="col-md-3 align-self-center">
            </div>
        </div>




        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Дата и время</th>
                <th>Сумма</th>
                <th>Тип операции</th>
                <th>Комментарии</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($balancelog as $key=>$val):?>

                <tr>
                    <td><?=$val['date']?></td>
                    <td class="text-center"><b><?=$val['sum']?></b></td>
                    <td class="text-center"><?=$val['type']?></td>
                    <td class="text-center"><?=$val['comment']?></td>

                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>



</div>
