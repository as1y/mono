<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Активные проекты</h5>

    </div>

    <div class="card-body">



        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Проект</th>
                <th>Описание</th>
                <th>Цель</th>
                <th>Ваше вознаграждение</th>
                <th>Статистика</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($allcompanies as $key=>$val):?>

                <tr>
                    <td><?=$val['company']?></td>
                    <td class="text-center"><?=$val['datareg']?></td>
                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center">

                        <a href="/operator/joincompany/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>Подать заявку</a>

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