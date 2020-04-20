<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">МОИ ПРОЕКТЫ</h5>

    </div>

    <div class="card-body">

        <table class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>ПРОЕКТ</th>
                <th>ID</th>
                <th>ИМЯ</th>
                <th>КОМПАНИЯ</th>
                <th>САЙТ</th>
                <th>КОММЕНТАРИЙ</th>
                <th>ДАТА ПЕРЕЗВОНА</th>
                <th>ДЕЙСТВИЕ</th>
            </tr>
            </thead>

            
            <tbody>
            <?
            foreach ($contactperezvon as $row):?>
            <?
            unset($data);
            $today = date("d-m-Y");
            $data = $row['dataperezvona'];


            if (strtotime($today) > strtotime($data)) $data = "<div class='alert alert-warning'>Вы забыли перезвонить <br><b>".$data."</b></div>";
            if ($today == $data) $data = "$data<br><span class='label label-info'> СЕГОДНЯ !!! </span>";
            if(empty($company['name'])) $company['name'] = "Вы уже не работаете в компании";
            ?>
            <tr>
                <td style="vertical-align: middle"><?=json_decode($row['company'], true)['company'];?></td>
                <td style="vertical-align: middle"><?=$row['id'];?></td>
                <td style="vertical-align: middle"><?=$row['name'];?></td>
                <td style="vertical-align: middle"><?=$row['companyname'];?></td>
                <td style="vertical-align: middle"><?=$row['site'];?></td>
                <td style="vertical-align: middle"><?=$row['comment'];?></td>
                <td style="vertical-align: middle"><?=$data;?></td>
                <td style="vertical-align: middle">
                    <a class='btn btn-danger' href='/panel/call/?perezvon=<?=$row['id'];?>'> ПЕРЕЗВОНИТЬ</a>
                </td>
            <tr>
                <?endforeach;?>
            </tbody>
        </table>

    </div>


</div>



