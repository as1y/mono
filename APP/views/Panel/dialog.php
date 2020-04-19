<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">МОИ ДИАЛОГИ</h6>

    </div>



    <div class="card-body justify-content-center text-center-end">


        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Имя Фамилия</th>
                <th>Сообщение</th>
                <th>Кол-во</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($dialogsinfo as $key=>$val):?>

                <tr>

                    <td>
                        <img src="<?=$val['avatar']?>" width="38" height="38" class="rounded-circle" alt="">
                        <?=$val['username']?>
                    </td>


                    <td class="text-center">
                        <?=$val['date']?>
                    </td>


                    <td class="text-center"><b>0 руб.</b></td>
                    <td class="text-center">
                        <a href="/panel/messages/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>Сообщение</a>
                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>



    </div>
</div>