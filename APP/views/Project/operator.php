<div class="row">

    <div class="col-md-6">

        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">ЗАЯВКИ В ПРОЕКТ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic text-center">
                    <thead>
                    <tr>
                        <th>Имя Фамилия</th>
                        <th>Аватар</th>
                        <th>Звонков</th>
                        <th>Информация</th>
                        <th>Приветствие</th>

                    </tr>
                    </thead>


                    <tbody>


                    <?php


                    foreach ($balancelog as $key=>$val):?>
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



    </div>





    <div class="col-md-6">

        ОПЕРАТОРЫ НА ПРОЕКТЕ


    </div>


</div>

