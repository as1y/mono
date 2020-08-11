<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ПОСЛЕДНИЕ КОНВЕРСИИ</h5>

    </div>

    <div class="card-body">



            <table  class="table datatable-basic text-center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Источник</th>
                    <th>Ключевое слово</th>
                    <th>Оффер</th>
                    <th>Купон</th>
                    <th>Действие</th>
                    <th>Заработок</th>

                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($lastconversion as $key=>$value):?>
                    <tr>
                        <td><?=$value['id']?></td>
                        <td><?=json_decode($value['utm'], true)['utm_source']?></td>
                        <td><?=json_decode($value['utm'], true)['utm_term']?></td>
                        <td><?=$value['offer']?></td>
                        <td><?=json_decode($value['coupon'], true)['name']?></td>
                        <td><?=$value['action']?></td>
                        <td><b><?=$value['zarabotok']?></b></td>
                    </tr>
                <?php endforeach;?>








                </tbody>
            </table>







    </div>



</div>
