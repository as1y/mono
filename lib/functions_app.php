<?php

function getrecord2($idcont) {
    global $account_id;
    global $api_key;

//    $params->from_date = '2012-01-01 00:00:00';
//    $params->to_date = '2014-01-01 00:00:00';
//    $params->count = 1;
//    $params->timezone = 'Etc/GMT';

    $url = "https://api.voximplant.com/platform_api/GetCallHistory/";

    $PARAMS['GET'] = [
        'account_id' => $account_id,
        'api_key' => $api_key,
        'count' => 1,
//        'timezone' => 'Etc/GMT',
        'from_date' =>    '2020-01-01 00:00:00',
        'to_date' => '2020-04-14 00:00:00',
        'with_records' => true,
        'with_calls' => true
  

//        'call_session_history_custom_data' => $idcont,
    ];



  $result =  fCURL($url, $PARAMS);

    show($result);

    echo date("Y-m-d h:m:s");
  exit("gdfgdfg");




    return $result;
}


function raskladkazapisi($zapis) {
    if ($zapis != "nope") {
        $records = '';
        $date = $zapis['date'];
        $zapis = json_decode($zapis['data'], true);
        foreach($zapis['result'] as $val) {
            if (isset($val['records']['0'])) {
                $url = $val['records']['0']['record_url'];
                $a = "<div class='well'><p><audio src='".$val['records']['0']['record_url']."' controls></audio></p><i class='fa fa-calendar'></i> ".$date."</div>";
            }
            if (!isset($url)) $a = "<p>Без записи</p>";
            $records = $records.$a;
        }
    }
    if (!isset($records)) $records = "Запись отсутсвует<br />";
    return $records;
}





// ОБРАБОТКИ СТАТУСОВ НА ВИЗУАЛЬНЫЕ ЭФФЕКТЫ
function leadstatus ($status){
	if ($status=="0") return '<div class="label label-warning">НА МОДЕРАЦИИ</div>';
	if ($status=="1") return '<div class="label label-success"><b>ОДОБРЕН</b></div>';
	if ($status=="2") return '<div class="label label-danger">ОТКЛОНЕН</div>';
}
function leadteable ($status){
	if ($status=="0") return '';
	if ($status=="1") return "";
	if ($status=="2") return "";
}



function tematika ($status){
    if ($status=="1") return 'Digital';
    if ($status=="2") return 'Медицина';
    if ($status=="3") return 'Банковский сектр';
    if ($status=="4") return 'Страховка';
}


function companytype ($status){
    if ($status=="1") return 'ЛИД';
    if ($status=="2") return 'ВСТРЕЧА';
    if ($status=="3") return 'УЧАСТИЕ В АКЦИИ';
    if ($status=="4") return 'ПРИГЛАШЕНИЕ';
    if ($status=="5") return 'АНКЕТИРОВАНИЕ';
    if ($status=="6") return 'ИНФОРМИРОВАНИЕ';
}





function passoperator ($status){
	if ($status=="1") return '<span class="badge badge-warning">НА ПРОВЕРКЕ</span>';
	if ($status=="2") return '<span class="badge badge-success">ДОПУЩЕН</span>';
	if ($status=="3") return '<span class="badge badge-danger">ОТКЛОНЕН</span>';
}

function timecall ($status){
    if ($status=="standart") return 'Будние дни, рабочее время (09:00-19:00)';
    if ($status=="maximum") return 'Будние дни, расширенное время (09:00-21:00)';
    if ($status=="ultra") return 'Будни + выходные, расширенное время (09:00-21:00)';

}



function countnewoperators($company){
    $count = 0;
    $countnew = json_decode($company['operators'], true);

    foreach ($countnew as $key=>$val){
        if ($val == 1) $count++;
    }
    return $count;
}






function obrezanie ($text, $symbols){

   $result = mb_strimwidth($text, 0, $symbols, "...");

    return $result;

}


function ticketstatus ($status){
    if ($status=="1") return '<span class="badge badge-success">ОТКРЫТ</span>';
    if ($status=="2") return '<span class="badge badge-secondary">ЗАКРЫТ</span>';
}



function rendercontactinfo ($DATA){

    $DATA = json_decode($DATA, true);

?>

    <table>
        <tr>
            <td><b>ИМЯ</b></td>
            <td><?=(!empty($DATA['name'])) ?  $DATA['name'] : "не заполнено"?></td>
        </tr>

        <tr>
            <td><b>ТЕЛЕФОН</b></td>
            <td><?=(!empty($DATA['tel'])) ?  $DATA['tel'] : "не заполнено"?></td>
        </tr>

        <tr>
            <td><b>КОМПАНИЯ</b></td>
            <td><?=(!empty($DATA['company'])) ?  $DATA['company'] : "не заполнено"?></td>
        </tr>

        <tr>
            <td><b>САЙТ</b></td>
            <td><?=(!empty($DATA['site'])) ?  $DATA['site'] : "не заполнено"?></td>
        </tr>

        <tr>
            <td><b>КОММЕНТАРИЙ</b></td>
            <td><?=(!empty($DATA['comment'])) ?  $DATA['comment'] : "не заполнено"?></td>
        </tr>




    </table>


    <?php



  return true;

}


function renderresult ($DATA){
    $DATA = json_decode($DATA, true);

    foreach ($DATA as $key=>$val){
        echo "<b>".$val['NAME'].": </b>".$val['VAL']."<br>";
    }






    return true;

}





function rendertypeaccount($type){
    if ($type == "O") return "Оператор";
    if ($type == "R") return "Рекламодатель";
}


function renderresultform($DATA){
    $FORM = json_decode($DATA, true);



    foreach ($FORM as $key=>$val){

        if ($val['TYPE'] == 1){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="customresult<?=$key?>" class="form-control" placeholder="<?=$val['NAME']?>">
                </div>
            </div>
            <?php
        }

        if ($val['TYPE'] == 2){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="date"  name="customresult<?=$key?>" class="form-control" >
                </div>
            </div>

        <?php

        }

        if ($val['TYPE'] == 3){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <div class="input-group">
                    <textarea rows="3" cols="3" name="customresult<?=$key?>" class="form-control" placeholder="Описание"></textarea>
                </div>
            </div>
        <?php

        }







    }





}


function renderform ($FORMRESULT, $idc){

    foreach ($FORMRESULT as $key=>$val){


        if ($val['TYPE'] == 1){
            ?>
            <div class="form-group">

                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <div class="input-group">
                <input type="text" disabled class="form-control" placeholder="<?=$val['NAME']?>">
                    <a href="/project/resultform/?id=<?=$idc?>&action=delete&element=<?=$key?>" class="btn btn-danger btn-icon"><i class="icon-trash"></i></a>
                </div>

            </div>
            <?php
        }

        if ($val['TYPE'] == 2){
            ?>
            <div class="form-group">


                <label><?=$val['NAME']?><span class="text-danger">*</span></label>

                <div class="input-group">
                <input type="date" disabled class="form-control" placeholder="<?=$val['NAME']?>">
                    <a href="/project/resultform/?id=<?=$idc?>&action=delete&element=<?=$key?>" class="btn btn-danger btn-icon"><i class="icon-trash"></i></a>
                </div>

            </div>
            <?php
        }


        if ($val['TYPE'] == 3){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>


            <div class="input-group">
                <textarea rows="3" cols="3" disabled class="form-control" placeholder="<?=$val['NAME']?>"></textarea>
                <a href="/project/resultform/?id=<?=$idc?>&action=delete&element=<?=$key?>" class="btn btn-danger btn-icon"><i class="icon-trash"></i></a>
            </div>

            </div>
            <?php
        }







    }








}








function camstatus ($status, $id ){
	if ($status=="1"){
		return '<div id="stat'.$id.'" class="badge badge-success">РАБОТАЕТ</div>';
	}
	if ($status=="2"){
		return '<div id="stat'.$id.'" class="badge badge-danger">НЕ РАБОТАЕТ</div>';
	}
	if ($status=="3" || $status == "4"){
		return '<div id="stat'.$id.'" class="badge badge-info">НЕ РАБОЧЕЕ ВРЕМЯ</div>';
	}
	if ($status=="5"){
		return '<div id="stat'.$id.'" class="badge badge-info">ДОСТИГНУТ ДНЕВНОЙ ЛИМИТ</div>';
	}
	if ($status=="6"){
		return '<div id="stat'.$id.'" class="badge badge-info">КОНЧИЛИСЬ КОНТАКТЫ</div>';
	}
}
// ВЫВОД МАССИВА ЧТОБЫ ОТОБРАЗИТЬ ФОРМУ С РЕЗУЛЬТАТОМ
function showmass ($par, $ch){
	foreach ($par as $key => $val){
		if ($ch){
			if ($val['TYPE']==2){ $dt = "(Д)"; }
			else{
				$dt="";
			}
			echo '
          <div id="polosa'.$key.'"  >
            <label class="col-md-3 control-label">'.$val['NAME'].'<span class="required" aria-required="true"> * </span></label>
               <div class="form-inline">
               <input title="rezt" name="'.$key.'" ttype="'.$val['TYPE'].'" tname="'.$val['NAME'].'" readonly="" type="text" class="form-control" placeholder="'.$dt.''.$val['NAME'].'" maxlength="50">
                <button class="btn btn-danger" kto="'.$key.'"  onclick="delc('.$key.')" ><i class="fa fa-trash"></i></button>
               </div>
          </div>
		';
		} else {
			if ($val['TYPE']==1){ //ТЕКСТОВОЕ ПОЛЕ
				echo '
          <div id="polosa'.$key.'" class="form-group">
            <label class="col-md-3 control-label">'.$val['NAME'].'<span class="required" aria-required="true"> * </span></label>
               <div class="form-inline">
<input title="rezt" name="'.$key.'" ttype="'.$val['TYPE'].'" tname="'.$val['NAME'].'" type="text" class="form-control"  placeholder="'.$val['NAME'].'" maxlength="50">
               </div>
          </div>
		';
			} //ТЕКСТОВОЕ ПОЛЕ
			if ($val['TYPE']==2){ // ДАТА
				echo '
         <div id="polosa'.$key.'" class="form-group">
         <label class="col-md-3 control-label">'.$val['NAME'].'<span class="required" aria-required="true"> * </span></label>
         <<div class="form-inline">
            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+1d">
                <span class="input-group-btn">
                <button class="btn default" type="button"> <i class="fa fa-calendar"></i></button>
                </span>
                <input title="rezt" name="'.$key.'" ttype="'.$val['TYPE'].'" tname="'.$val['NAME'].'" type="text" class="form-control" readonly="">
           </div>
		</div>
		</div>
		';
			} // ДАТА
			if ($val['TYPE']==3){ // EMAIL
				echo '
            <div id="polosa'.$key.'" class="form-group">
            <label class="col-md-3 id="tname" control-label">'.$val['NAME'].' <span class="required" aria-required="true"> * </span>  </label>
              <div class="form-inline">
                 <div class="input-group">
				     <input title="rezt" name="'.$key.'" ttype="'.$val['TYPE'].'" tname="'.$val['NAME'].'"  type="text" class="form-control" placeholder="'.$val['NAME'].'"> </div>
                  </div>
            </div>
		';
			} // EMAIL


		}
	}
}
// ВЫВОД МАССИВА ЧТОБЫ ОТОБРАЗИТЬ ФОРМУ С РЕЗУЛЬТАТОМ
// Проверка на ограничение
function pole_valid ($pole,$num,$type) {


	if (!$pole) return ['error' => 'Поле пустое и не заполненно.'];


	if ($type == "i"){
		$pole = intval($pole);
		if (strlen($pole) > $num) return ['error' => 'Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.' '];
	}
	if ($type == "s"){
		if (strlen($pole) > $num) return ['error' => 'Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.''];
		$pole = trim($pole);
		$pole = strip_tags($pole);
		$pole = htmlspecialchars($pole);
		iconv_strlen($pole, 'UTF-8');
	}
	if ($type == "u"){
		if (strlen($pole) > $num) ['error' => 'Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.''];
		$pole = trim($pole);
		$pole = strip_tags($pole);
		$pole = htmlspecialchars($pole);
		iconv_strlen($pole, 'UTF-8');
	}


	return $pole;
}
// Проверка на ограничение
?>