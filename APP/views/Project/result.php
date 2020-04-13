<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">РЕЗУЛЬТАТ НА ПРОВЕРКЕ</h5>

            </div>

            <div class="card-body">

                <table  class="table datatable-basic text-center">
                    <thead>
                    <tr>
                        <th><b>ID</b></th>
                        <th><b>Дата</b></th>
                        <th><b>Оператор</b></th>
                        <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
                        <th><b>РЕЗУЛЬТАТ</b></th>
                        <th><b>ЗАПИСЬ</b></th>
                        <th><b>ДЕЙСТВИЯ</b></th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($operators['OperatoriNaModeracii'] as $key=>$val):?>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td class="text-center">Дата</td>
                            <td class="text-center">Оператор</td>
                            <td class="text-center">ИСХОДНЫЕ ДАННЫЕ</td>
                            <td class="text-center">РЕЗУЛЬТАТ</td>
                            <td class="text-center">ЗАПИСЬ</td>
                            <td class="text-center">

                                <a href="/project/operator/?id=<?=$company['id']?>&idoper=<?=$val['id']?>&action=accept" type="button" class="btn btn-success">ПОДТВЕРДИТЬ</a>
                                <a href="/project/operator/?id=<?=$company['id']?>&idoper=<?=$val['id']?>&action=reject" type="button" class="btn btn-danger">ОТКЛОНИТЬ</a>

                            </td>


                        </tr>
                    <?php endforeach;?>








                    </tbody>
                </table>
            </div>



        </div>



    </div>
</div>


<div class="row">


    <div class="col-md-12">
22

    </div>



</div>




<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th><b>ID</b></th>
        <th><b>Дата</b></th>
        <th><b>Оператор</b></th>
        <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
        <th><b>РЕЗУЛЬТАТ</b></th>
        <th><b>ЗАПИСЬ</b></th>
        <th><b>ОБРАТНАЯ СВЯЗЬ</b></th>
    </tr>
    </thead>
    <tbody>


    <?


    foreach ( $company->ownResultList as $row){
        if($row['id']!=0 && $row['status']==1 ){






//ОЧИЩАЕМ ПЕРЕМЕННЫЕ ДЛЯ ОТОБРАЖЕНИЕ В ТАБЛИЦЕ
            $b = '';
            $ci = '';
            $records = '';
            unset($fb);
            unset($zapis);


//ОЧИЩАЕМ ПЕРЕМЕННЫЕ ДЛЯ ОТОБРАЖЕНИЕ В ТАБЛИЦЕ
            //ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ДАННЫЕ ЗАПОЛНЕНИЯ ФОРМЫ
            $data = $row->data;
            $data = json_decode($data, JSON_UNESCAPED_UNICODE);
            //ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ДАННЫЕ ЗАПОЛНЕНИЯ ФОРМЫ
//ОТОБРАЖЕМ ИНФУ

            if (isset($data)){
                foreach ($data as $val){
                    $a =  " <b>".$val['NAME']."</b> -  ".$val['VAL']."  <br>";
                    $b = $b.$a;
                }
            }
//ОТОБРАЖЕМ ИНФУ

            $userinfo = $row->users;
            $idcontact = $row->contact_id;


            if (isset($zapisi)){

                foreach ($zapisi as $k=>$v){
                    if ($v['contact_id'] == $idcontact) $zapis = $zapisi[$k];

                }
                $records = "Ошибка записи";
                if (isset($zapis))	$records = raskladkazapisi($zapis);
            } else{
                $records = "Ошибка записи";
            }









//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ИНФОРМАЦИЯ О КОНТАКТЕ
            $CONTACTINFO = $row['contactinfo'];
            $CONTACTINFO = json_decode($CONTACTINFO, JSON_UNESCAPED_UNICODE);

            if (isset($CONTACTINFO['name'])){
                $a = " <b>ИМЯ:</b> ".$CONTACTINFO['name']."<br> ";
                $ci = $ci.$a;
            }
            if (isset($CONTACTINFO['tel'])){
                $a = " <b>ТЕЛЕФОН:</b> ".$CONTACTINFO['tel']."<br> ";
                $ci = $ci.$a;
            }
            if (isset($CONTACTINFO['company'])){
                $a = " <b>КОМПАНИЯ:</b> ".$CONTACTINFO['company']."<br> ";
                $ci = $ci.$a;
            }
            if (isset($CONTACTINFO['site'])){
                $a = " <b>САЙТ:</b> ".$CONTACTINFO['site']."<br> ";
                $ci = $ci.$a;
            }
            if (isset($CONTACTINFO['comment'])){
                $a = " <b>КОММЕНТАРИЙ:</b> ".$CONTACTINFO['comment']."<br> ";
                $ci = $ci.$a;
            }
//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ИНФОРМАЦИЯ О КОНТАКТЕ


            if(!empty($row['feedback'])) $fb = json_decode($row['feedback'], JSON_UNESCAPED_UNICODE);

            ?>










            <tr >


                <td style='vertical-align: middle'>#<?=$row['id']?></td>
                <td style='vertical-align: middle'><?=$row['date']?></td>
                <td style='vertical-align: middle'><b>ИМЯ:</b><br><?=$userinfo['firstname']?></td>
                <td style='vertical-align: middle'>
                    <?=$ci?>
                    <br>

                </td>
                <td style='vertical-align: middle'>

                    <?=$b?><b>Комментарий:</b><?=$row['comment']?></td>
                <td style='vertical-align: middle'><?=$records?></td>
                <td style='vertical-align: middle'>
                    <?
                    if(isset($fb)):
                        foreach ($fb as $com):
                            ?>
                            <?=$com?>
                            <hr>
                        <?
                        endforeach;
                    endif;
                    ?>



                    <button class='btn btn-info' onclick='fback(<?=$row['id']?>)' > <i class='fa fa-plus'></i> КОММЕНТАРИЙ <i class='fa fa-plus'></i></button>
                    <textarea id='commentt' title='<?=$row['id']?>'  class='form-control' placeholder='КОММЕНТАРИЙ' cols=20 rows=4></textarea>

                </td>

            </tr>



        <?}} ?>








    </tbody>
</table>

