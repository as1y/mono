<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Баланс</h5>

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-6">

                ВИДЖЕТ ДЛЯ БАЛАНСА



            </div>
        </div>

        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Дата и время</th>
                <th>Сумма</th>
                <th>Тип операции</th>
                <th>Комментарии</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($balancelog as $key=>$val):?>

                <tr>
                    <td><?=$val['date']?></td>
                    <td class="text-center"><b><?=$val['summa']?></b></td>
                    <td class="text-center"><?=$val['type']?></td>
                    <td class="text-center"><?=$val['comment']?></td>

                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>



</div>
