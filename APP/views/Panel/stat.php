<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">СТАТИСТИКА ПО КОМПАНИИ</h5>

    </div>

    <div class="card-body">

        <a href="/panel/" type="button" class="btn btn-primary">НАЗАД</a><br>

        <h2>ОБЩАЯ</h2>
        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Запрос</th>
                <th>Заработок</th>
                <th>AVG</th>
                <th>Конверсий</th>
                <th>Кликов</th>
                <th>%</th>

            </tr>
            </thead>
            <tbody>

            <?php

            $conversions = [];
            foreach ($detalstat as $key=>$value):

                if (!empty($value['conversions']))  $conversions = $conversions + $value['conversions'];

                ?>
                <tr>
                    <td><?=$key?></td>

                    <td><b><?=$value['zarabotok']?></b> руб.</td>
                    <td><?php

                        if (!empty($value['conversion'])){
                            echo round(($value['zarabotok']/$value['conversion']),2);
                        }
                        if (empty($value['conversion'])) echo "0";

                        ?></td>



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

        <h2>ПО КОНВЕРСИЯМ</h2>
        <table  class="table datatable-basic text-center">
            <thead>
            <tr>

                <th>utm_source</th>
                <th>utm_term</th>
                <th>Заработок</th>
                <th>Имя</th>

            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($conversions as $key=>$value):?>
                <tr>

                    <td><?=$value['utm_source']?></td>
                    <td><?=$value['utm_term']?></td>
                    <td><?=$value['zarabotok']?></td>
                    <td><?=$value['name']?></td>

                </tr>
            <?php
            endforeach;?>
            </tbody>
        </table>



    </div>



</div>
