<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">СТАТИСТИКА ПО КОМПАНИИ</h5>

    </div>

    <div class="card-body">

        <a href="/panel/" type="button" class="btn btn-primary">НАЗАД</a><br>


        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Купоны</th>
                <th>Заработок</th>
                <th>Конверсий</th>
                <th>Кликов</th>
                <th>%</th>

            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($detalstat as $key=>$value):?>
                <tr>
                    <td><?=$key?></td>
                    <td>

                        <?php if (!empty($value['name'])) :
                            $r = array_count_values($value['name']);
                            ?>


                        <?php
                            foreach ($r as $k=>$v) echo $k." - ".$v."<br>";


                            ?>


                    <?php endif;?>


                    </td>
                    <td><b><?=$value['zarabotok']?></b> руб.</td>
                    <td><?=$value['conversion']?></td>
                    <td><?=$value['clicks']?></td>
                    <td>

                        <?= round( ($value['conversion']/$value['clicks'] )*100,2)

                        ?>%


                    </td>
                </tr>
                <?php
            endforeach;?>
            </tbody>
        </table>



    </div>



</div>
