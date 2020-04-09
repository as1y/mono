<!-- Basic datatable -->
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


            <?php foreach ($allref as $key=>$val):?>

                <tr>
                    <td><?=$val['username']?></td>
                    <td class="text-center"><?=$val['datareg']?></td>
                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center">
                        <a href="/panel/messages/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>Сообщение</a>
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
<!-- /basic datatable -->