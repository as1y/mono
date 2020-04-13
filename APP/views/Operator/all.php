<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">ВСЕ ПРОЕКТЫ</h5>

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
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($allcompanies as $key=>$val):?>

                <tr>
                    <td><?=$val['company']?></td>
                    <td>
                        <?=obrezanie($val['nameproduct'], 70)?>
                    </td>
                    <td>

                        <?=companytype($val['type'])?>

                    </td>
                    <td>


                        <span class="badge badge-success"><?=$val['priceresult']?> руб.</b></span><b>

                    </td>
                    <td>
                        За <?=$val['mincall']?> звонков <b> <?=$val['bonuscall']?> руб.</b>
                    </td>
                    <td>

                        <a href="/operator/companyinfo/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-cursor2 mr-2"></i>ИНФОРМАЦИЯ</a>

                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>


</div>