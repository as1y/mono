<?php
function raskladkazapisi($zapis){
	if ($zapis != "nope"){
		$records = '';
		$date = $zapis['date'];
		$zapis = json_decode($zapis['data'], true);
		foreach ($zapis['result'] as $val ){
			if (isset($val['records']['0'])){
				$url = $val['records']['0']['record_url'];
				$a =  "<a href='".$val['records']['0']['record_url']."' target=_blank><b>РАЗГОВОР</b></a><br>
						<i class='fa fa-clock-o'></i> ".$val['records']['0']['duration']."сек.<br>
						<i class='fa fa-calendar'></i>".$date." <br> <hr>" ;
			}
			if (!isset($url)) $a = "Без записи<hr>";
			$records = $records.$a;
		}
	}
	if (!isset($records)) $records = "Запись отсутсвует<br>";
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




function companytype ($status){
	if ($status=="1") return 'ЛИД';
	if ($status=="2") return 'ВСТРЕЧА';
	if ($status=="3") return 'УЧАСТИЕ В АКЦИИ';
	if ($status=="4") return 'ПРИГЛАШЕНИЕ';
	if ($status=="5") return 'АНКЕТИРОВАНИЕ';
	if ($status=="6") return 'ИНФОРМИРОВАНИЕ';
}

function timecall ($status){
    if ($status=="standart") return 'Будние дни, рабочее время (09:00-19:00)';
    if ($status=="maximum") return 'Будние дни, расширенное время (09:00-21:00)';
    if ($status=="ultra") return 'Будни + выходные, расширенное время (09:00-21:00)';

}





function renderform ($FORMRESULT){

    foreach ($FORMRESULT as $key=>$val){


        if ($val['TYPE'] == 1){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <input type="text" disabled class="form-control" placeholder="<?=$val['NAME']?>">
            </div>
            <?php
        }

        if ($val['TYPE'] == 2){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <input type="date" disabled class="form-control" placeholder="<?=$val['NAME']?>">
            </div>
            <?php
        }


        if ($val['TYPE'] == 3){
            ?>
            <div class="form-group">
                <label><?=$val['NAME']?><span class="text-danger">*</span></label>
                <textarea rows="3" cols="3" disabled class="form-control" placeholder="<?=$val['NAME']?>"></textarea>
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


	if (!$pole) return $result['error'] = 'Поле пустое и не заполненно.';


	if ($type == "i"){
		$pole = intval($pole);
		if (strlen($pole) > $num) return $result['error'] = ('Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.' ');
	}
	if ($type == "s"){
		if (strlen($pole) > $num) return $result['error'] = ('Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.'');
		$pole = trim($pole);
		$pole = strip_tags($pole);
		$pole = htmlspecialchars($pole);
		iconv_strlen($pole, 'UTF-8');
	}
	if ($type == "u"){
		if (strlen($pole) > $num) return $result['error'] = ('Текст '.strlen($pole).' символов слишком большой. Нужно не больее '.$num.'');
		$pole = trim($pole);
		$pole = strip_tags($pole);
		$pole = htmlspecialchars($pole);
		iconv_strlen($pole, 'UTF-8');
	}


	return $result['success'] = $pole;
}
// Проверка на ограничение
?>