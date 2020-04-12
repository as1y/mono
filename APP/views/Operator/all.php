<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Активные проекты</h5>

    </div>

    <div class="card-body">



        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Компания</th>
                <th>Продукт</th>
                <th>Цель</th>
                <th>Оплата (Руб.)</th>
                <th>Бонус</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($allcompanies as $key=>$val):?>

                <tr>
                    <td><?=$val['company']?></td>
                    <td class="text-center">
                        <?=obrezanie($val['nameproduct'], 70)?>
                    </td>
                    <td class="text-center">

                        <?=companytype($val['type'])?>

                    </td>
                    <td class="text-center">


                        <b> <?=$val['priceresult']?></b>

                    </td>
                    <td class="text-center">
                        За <?=$val['mincall']?> звонков <b> <?=$val['bonuscall']?> руб.</b>
                    </td>
                    <td class="text-center">

                        <a href="/operator/joincompany/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>Подробнее</a>

                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>

    <!--    <table class="table datatable-basic">-->
    <!--        <thead>-->
    <!--        <tr class="text-center">-->
    <!--            <th>Имя Фамилия</th>-->
    <!--            <th>Дата регистрации</th>-->
    <!--            <th>Ваш заработок</th>-->
    <!--        </tr>-->
    <!--        </thead>-->
    <!---->
    <!---->
    <!--        <tbody>-->
    <!---->
    <!--        <tr class="text-center">-->
    <!--            <td>-->
    <!--                Вася-->
    <!--            </td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>-->
    <!---->
    <!--        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>-->
    <!---->
    <!---->
    <!--        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>        <tr class="text-center">-->
    <!--            <td>Вася</td>-->
    <!--            <td>Traffic Court Referee</td>-->
    <!--            <td>22 Jun 1972</td>-->
    <!--        </tr>-->
    <!---->
    <!---->
    <!---->
    <!--        </tbody>-->
    <!--    </table>-->


</div>