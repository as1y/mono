<?php
namespace APP\models;
use RedBeanPHP\R;

class Wform extends \APP\core\base\Model {
	public function dubli($POST) {
		$idc = $POST['idc'];
		$result = R::getAll( "SELECT tel,id FROM `contact` WHERE  `status` = '0' AND `company_id` = '".$idc."' ");
		$tel = array();
		foreach ($result as $row) {
			unset($dubl);
			$dubl = in_array($row['tel'], $tel);
			if ($dubl) {
				$row['tel'] = "ДУБЛЬ";
				$dublcount++;
				R::exec(" DELETE FROM `contact` WHERE `contact`.`id` = '".$row['id']."' ");
			}
			$tel[] = $row['tel'];
		}
		if (!isset($dublcount)) $dublcount = 0;
		message('Найдено и удалено '.$dublcount.' дублей ');
	}
	public function switcnedostup($POST) {
		$idc = $POST['idc'];
		//ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
		R::exec(" UPDATE `contact` SET `status` = '0', `users_id` = '0'   WHERE `company_id` = '".$idc."' AND `status` = 4  ;	");
		//ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
		message('Статус контактов обновлен');
	}
	public function switchotkaz($POST) {
		$idc = $POST['idc'];
		//ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
		R::exec(" UPDATE `contact` SET `status` = '0', `users_id` = '0'   WHERE `company_id` = '".$idc."' AND `status` = 3; ");
		//ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
		message('Статус контактов изминен');
	}
	public function addcrit($POST) {
		$idc = $POST['idc'];
		//ПРОВЕРКА NAME
		$POST['NAME'] = pole_valid ($POST['NAME'], 100, 's');
		$name = $POST['NAME'];
		//ПРОВЕРКА NAME
		$company = R::findOne( "company", "WHERE `id` = ? ", [$idc]);
		$mass = json_decode($company['criteriy'],TRUE);
		$c = count($mass)+1;
		$mass[$c] = $name;
		$mass = array_values($mass);
		$mass = json_encode($mass,JSON_UNESCAPED_UNICODE);
		R::exec(" UPDATE `company` SET `criteriy` = '".$mass."' WHERE `id` = ".$idc."; ");
		message('done');
	}
	public function delcrit($POST) {
		$idc = $POST['idc'];
		// ТУТ ПОЧЕМУТО ПРИ КОГДА ЭТОТ ЕБУЧИЙ НОЛЬ, ТО ВЫДАЕТ ОШИБКУ ПРОВЕРКУ ВАЛИДНОСТИ
		if ($POST['kto'] != '0') {
			//ПРОВЕРКА ID
			$POST['kto'] = pole_valid ($POST['kto'], 5, 'i');
			//ПРОВЕРКА ID
		}
		$kto = $POST['kto'];
		// ТУТ ПОЧЕМУТО ПРИ КОГДА ЭТОТ ЕБУЧИЙ НОЛЬ, ТО ВЫДАЕТ ОШИБКУ ПРОВЕРКУ ВАЛИДНОСТИ
		$company = R::findOne( "company", "WHERE `id` = ? ", [$idc]);
		$mass= json_decode($company['criteriy'],TRUE);
		unset($mass[$kto]); // УДАЛЯЕМ ЭЛЕМЕНТ
		$mass = array_values($mass);
		$mass = json_encode($mass,JSON_UNESCAPED_UNICODE);
		R::exec("UPDATE `company` SET `criteriy` = '".$mass."' WHERE `id` = ".$idc."; ");
		message('done');
	}
	// ИЗМИНЕНИЕ ИНФОРМАЦИИ О КОМПАНИИ В АДМИНКЕ
	public function changeinformation($POST) {
		//ПРОВЕРКА ID
		$idc = $POST['idc'];
		//ПРОВЕРКА ID
		$POST['daylimit'] = pole_valid ($POST['daylimit'], 7, 'i');
		$daylimit = $POST['daylimit'];
		$count_operator = intval($POST['count_operator']);
		if($count_operator < 3 ) $count_operator = 3;
		$moder = $POST['moder'];
		$timecall = $POST['timecall'];
		$POST['information'] = pole_valid ($POST['information'], 3000, 's');
		$POST['uvedomlenie'] = pole_valid ($POST['uvedomlenie'], 5, 's');
		//ЗАПИСЬ ДНЕЙ НЕДЕЛИ
		if ($POST['PN'] == "true") { $dni['PN'] = 'on';}else{ $dni['PN'] = '';}
		if ($POST['VT'] == "true") { $dni['VT'] = 'on';}else{ $dni['VT'] = '';}
		if ($POST['SR'] == "true") { $dni['SR'] = 'on';}else{ $dni['SR'] = '';}
		if ($POST['CHT'] == "true") { $dni['CHT'] = 'on';}else{ $dni['CHT'] = '';}
		if ($POST['PT'] == "true") { $dni['PT'] = 'on';}else{ $dni['PT'] = '';}
		if ($POST['SB'] == "true") { $dni['SB'] = 'on';}else{ $dni['SB'] = '';}
		if ($POST['VS'] == "true") { $dni['VS'] = 'on';}else{ $dni['VS'] = '';}
		//ЗАПИСЬ ДНЕЙ НЕДЕЛИ
		$dni = json_encode($dni,JSON_UNESCAPED_UNICODE);
		$amoCRM_email = strip_tags($POST['amoCRM_email']);
		$amoCRM_email = htmlspecialchars($amoCRM_email);
		$amoCRM_domain = strip_tags($POST['amoCRM_domain']);
		$amoCRM_domain = htmlspecialchars($amoCRM_domain);
		$amoCRM_apikey = strip_tags($POST['amoCRM_apikey']);
		$amoCRM_apikey = htmlspecialchars($amoCRM_apikey);
		$company_email = strip_tags($POST['company_email']);
		$company_email = htmlspecialchars($company_email);
		if($POST['sms'] == "true"){
			$sms = 1;
		}
		$sms_text = strip_tags($POST['sms_text']);
		$sms_text = htmlspecialchars($sms_text);
		//amoCRM
		if((!empty($POST['amoCRM_email'])) && (!empty($POST['amoCRM_domain'])) && (!empty($POST['amoCRM_apikey']))) {
			$amoDB = R::findOne('amocrm',' company_id = ?' , [$idc]);
			if(empty($amoDB)){
				function generateRandomString($length = 10) {
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength = strlen($characters);
					$randomString = '';
					for ($i = 0; $i < $length; $i++) {
						$randomString .= $characters[rand(0, $charactersLength - 1)];
					}
					return $randomString;
				}
				$amoCRM_cookie = generateRandomString();
				$amoCRM_cookie = $amoCRM_domain.$amoCRM_cookie;
				$amo_table = R::dispense( 'amocrm' );
				$amo_row = [
				'company_id' => $idc,
				'email' => $amoCRM_email,
				'domain' => $amoCRM_domain,
				'apikey' => $amoCRM_apikey,
				'cookie' => $amoCRM_cookie,
				];
				foreach($amo_row as $name=>$value){
					$amo_table->$name = $value;
				}
				R::store($amo_table);
			} else {
				R::exec("UPDATE amocrm
					SET
						email = ?,
						domain = ?,
						apikey = ?
					WHERE company_id = ?;
				",
					[$amoCRM_email,$amoCRM_domain,$amoCRM_apikey,$idc]);
			}
		}
		//amoCRM
		R::exec("UPDATE company SET
			information = ?,
			uvedomlenie = ?,
			email = ?,
			daylimit = ?,
			countoperator = ?,
			moder = ?,
			timecall = ?,
			dni = ?,
			sms = ?,
			sms_text = ?
			WHERE id = ?;
		",
			[$POST['information'],$POST['uvedomlenie'],$company_email,$daylimit,$count_operator,$moder,$timecall,$dni,$sms,$sms_text,$idc]);
		message('Информация изменена');
	}
	// ИЗМИНЕНИЕ ИНФОРМАЦИИ О КОМПАНИИ В АДМИНКЕ
	public function moderUpdateCompany($POST) {
		$idc = $POST['idc'];
		$company_manager = strip_tags($POST['company_manager']);
		$company_manager = htmlspecialchars($company_manager);
		$company_clientid = strip_tags($POST['company_clientid']);
		$company_clientid = htmlspecialchars($company_clientid);
		R::exec("UPDATE company SET
			manager = ?,
			client_id = ?
			WHERE id = ?;
		",
			[$company_manager,$company_clientid,$idc]);
		message('Информация изменена');
	}
	public function moderClearContacts($POST) {
		$idc = $POST['idc'];
		R::exec("DELETE FROM contact WHERE company_id = ?;", [$idc]);
		message('Информация изменена');
	}
	//ДОБАВЛЕНИЕ ЮЗЕРА В БАН
	public function banuser($POST) {
		$idc = $POST['idc'];
		//ПРОВЕРКА ID
		$idu = $POST['ban'];
		$idu = pole_valid ($idu, 4 , 'i');
		//ПРОВЕРКА ID
		// СТАТА ПО УСПЕШНЫМ КАМПАНИЯМ
		$userinfo = R::load("users", $idu );
		// СТАТА ПО УСПЕШНЫМ КАМПАНИЯМ
		$mycamid = json_decode( $userinfo['mycamid'], JSON_UNESCAPED_UNICODE); // ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		$bancamp = json_decode( $userinfo['bancamp'], JSON_UNESCAPED_UNICODE); // ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		// УДАЛИТЬ ИЗ МАССИВА $moderatecamp элемент $idc
		$key = array_search($idc,$mycamid);
		if (false !== $key) unset($mycamid[$key]);
		//ДОБАВИТЬ В $mycamid элемент $idc
		$bancamp[] = $idc;
		$mycamid = array_values($mycamid); //Сортируем массив
		$bancamp = array_values($bancamp); //Сортируем массив
		$mycamid = json_encode($mycamid, JSON_UNESCAPED_UNICODE);
		$bancamp = json_encode($bancamp, JSON_UNESCAPED_UNICODE);
		R::exec("DELETE FROM `joincompany` WHERE company_id = ".$idc." AND users_id = ".$idu." ");
		R::exec(" UPDATE `users` SET `mycamid` = '".$mycamid."', `bancamp` = '".$bancamp."'  WHERE `id` = ".$idu."; 	");
		message('Юзер забанен');
		// ПРОВЕРЯЕМ ДОСТУПНА ЛИ ЕМУ КАМПАНИЯ
	}
	//ДОБАВЛЕНИЕ ЮЗЕРА В БАН
	// ВЫКИДЫВАЕМ ПОЛЬЗОВАТЕЛЯ
	public function dropuser($POST) {
		//ПРОВЕРКА ID
		$idc = $POST['idc'];
		//ПРОВЕРКА ID
		//ПРОВЕРКА ID
		$idu = $POST['drop'];
		$idu = pole_valid ($idu, 4 , 'i');
		//ПРОВЕРКА ID
		$userinfo = R::load("users", $idu );
		$company = R::load("company", $idc );
		$mycamid = json_decode( $userinfo['mycamid'], JSON_UNESCAPED_UNICODE); // ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		// УДАЛИТЬ ИЗ МАССИВА $moderatecamp элемент $idc
		$key = array_search($idc,$mycamid);
		if (false !== $key) unset($mycamid[$key]);
		$mycamid = array_values($mycamid); //Сортируем массив
		$mycamid = json_encode($mycamid, JSON_UNESCAPED_UNICODE);
		// УДАЛЯЕМ ФАЙЛ С ЗАПИСЬЮ И ТАБЛИЦОЙ
		$jc = R::findOne("joincompany", "WHERE company_id = ".$idc." AND users_id = ".$idu." ");
		unlink("/home/bitrix/ext_www/rabota-zvonki.ru/temp_zayavki/".$jc['record']."");
		R::exec( "DELETE FROM joincompany WHERE id = ?", [$jc['id']] );
		// УДАЛЯЕМ ФАЙЛ С ЗАПИСЬЮ И ТАБЛИЦОЙ
		//ОТПРАВКА ПИСЬМА ОПЕРАТОРУ
		$bodyMail["text"] = "Вы исключены из проекта ".$company["name"].". rabota-zvonki.ru";
		$bodyMail["subject"] = "Вы исключены из проекта ".$company["name"].". rabota-zvonki.ru";
		$bodyMail["operator"] = $userinfo["firstname"];
		$this->sendm("kick_operator", $userinfo["email"], $bodyMail);
		//ОТПРАВКА ПИCЬМА ОПЕРАТОРУ
		R::exec(" UPDATE `users` SET `mycamid` = '".$mycamid."'  WHERE `users`.`id` = ".$idu."; 	");
		message('Оператор исключен из проекта');
	}
	//ВЫКИДЫВАЕМ ПОЛЬЗОВАТЕЛЯ
	// ИЗМИНЕНИЕ СКРИПТА
	public function changescript($POST) {
		$idc = $POST['idc'];
		iconv_strlen($POST['textsc'], 'UTF-8');
		R::exec("UPDATE `script` SET `text` = '".$POST['textsc']."' WHERE `company_id` = ".$idc.";");
		message('Скрипт изменен');
	}
	// ИЗМИНЕНИЕ СКРИПТА
	// ДОБАВЛЕНИЯ ПОЛЯ В АДМИНКЕ
	public function addpole($POST) {
		$idc = $POST['idc'];
		$POST['NAME'] = pole_valid ($POST['NAME'], 100, 's');
		$NAME = $POST['NAME'];
		$POST['TYPE'] = pole_valid ($POST['TYPE'], 5, 'i');
		$TYPE = $POST['TYPE'];
		$script = R::findOne("script", "WHERE company_id = ?", [$idc]);
		$MASS = json_decode($script['form'],TRUE);
		$c = count($MASS)+1;
		$MASS[$c]['NAME'] = $NAME;
		$MASS[$c]['TYPE'] = $TYPE;
		$MASS = array_values($MASS);
		$MASS = json_encode($MASS,JSON_UNESCAPED_UNICODE);
		R::exec("UPDATE `script` SET `form` = '".$MASS."' WHERE `company_id` = ".$idc.";");
		message('done');
	}
	// ДОБАВЛЕНИЕ ПОЛЯ В АДМИНКЕ

	//УДАЛЕНИЯ ПОЛЯ К РЕЗУЛЬТАТУ
	public function delpole($POST) {
		$idc = $POST['idc'];
		// ТУТ ПОЧЕМУТО ПРИ КОГДА ЭТОТ ЕБУЧИЙ НОЛЬ, ТО ВЫДАЕТ ОШИБКУ ПРОВЕРКУ ВАЛИДНОСТИ
		if ($POST['kto'] != '0') {
			//ПРОВЕРКА ID
			$POST['kto'] = pole_valid ($POST['kto'], 5, 'i');
			//ПРОВЕРКА ID
		}
		$kto = $POST['kto'];
		// ТУТ ПОЧЕМУТО ПРИ КОГДА ЭТОТ ЕБУЧИЙ НОЛЬ, ТО ВЫДАЕТ ОШИБКУ ПРОВЕРКУ ВАЛИДНОСТИ
		$script = R::findOne("script", "WHERE company_id = ?", [$idc]);
		$MASS = json_decode($script['form'],TRUE);
		unset($MASS[$kto]); // УДАЛЯЕМ ЭЛЕМЕНТ
		$MASS = array_values($MASS);
		$MASS = json_encode($MASS,JSON_UNESCAPED_UNICODE);
		R::exec("
			UPDATE `script` SET `form` = '".$MASS."' WHERE `company_id` = ".$idc.";
		");
		message('done');
	}
	//УДАЛЕНИЯ ПОЛЯ К РЕЗУЛЬТАТУ
	// ОБРАТНАЯ СВЯЗЬ
	public function fback($POST) {
		$idr = $POST['idr'];
		$POST['textf'] =  pole_valid ($POST['textf'], 100, 's');
		$result = R::findOne("result", "WHERE id = ?", [$idr]);
		$fback = json_decode($result['feedback'], JSON_UNESCAPED_UNICODE);
		$fback[] = $POST['textf'];
		$fback = json_encode($fback, JSON_UNESCAPED_UNICODE);
		$result->feedback = $fback;
		R::store($result);
		message('Комменатрий добавлен');
	}
	// ОБРАТНАЯ СВЯЗЬ
	public function bazaupl($POST) {
		//ОПРЕДЕЛЯЕМ ПЕРЕМЕННЫЕ
		if ($POST['bazaload'] == "undefined") message('Ошибка пути базы');
		$POST['bazaload'] = pole_valid ($POST['bazaload'], 200, 's');
		$POST['idc'] = pole_valid ($POST['idc'], 5, 'i');
		$SEL = $POST['sel']; // Массив с выбраннами столбцами
		$clientid =  pole_valid ($POST['clientid'], 5, 'i');
		//ОПРЕДЕЛЯЕМ ПЕРЕМЕННЫЕ
		$filename = "/home/bitrix/ext_www/".DOMAIN."/".$POST['bazaload']."";
		if (!file_exists($filename)) message("Файл $filename не существует");
		// СПАРСИЛИ CSV В МАССИВ
		if (($fp = fopen($filename, "r")) !== FALSE) {
			while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
				$list[] = $data;
			}
			fclose($fp);
		}
		// СПАРСИЛИ CSV В МАССИВ
		// ИЩЕМ ЗНАЧЕНИЯ СТОЛБЦОВ В МАССИВАХ
		$telkey = array_search('tel', $SEL);
		$namekey = array_search('name', $SEL);
		$companykey = array_search('company', $SEL);
		$sitekey = array_search('site', $SEL);
		$commentkey = array_search('comment', $SEL);
		if (  $telkey === FALSE )  message('Определите колонку ТЕЛЕФОН   ');
		// ИЩЕМ ЗНАЧЕНИЯ СТОЛБЦОВ В МАССИВАХ
		// РАСКЛАДЫВАЕМ МАССИВ НА СТРОКИ
		$coun = 0;
		foreach ($list as $stroka) {
			$stroka[$telkey] = teleph($stroka[$telkey]);
			$dlinna = strlen($stroka[$telkey]);
			$tel = $stroka[$telkey];
			if ($stroka[$telkey] and $dlinna <= 11 ) {
				// ОБРАБАТЫВАЕТ ТОЛЬКО ЕСТЬ ТЕЛЕФОН
				$coun++;
				$name = $stroka[$namekey];
				$company = $stroka[$companykey];
				$site = $stroka[$sitekey];
				$comment = $stroka[$commentkey];
				$tell[] = $tel;
				if ( !$namekey and $namekey === FALSE ) $name = "-";
				if ( !$companykey and $companykey === FALSE ) $company = "-";
				if ( !$sitekey and $sitekey === FALSE ) $site = "#";
				if ( !$commentkey and $commentkey === FALSE ) $comment = "-";
				R::exec("
					INSERT INTO `contact` (`id`, `users_id`, `company_id`, `client_id`, `status`, `tel`, `name`, `company`, `site`, `comment`, `data`, `datacall`)
					VALUES (NULL, '0', '".$POST['idc']."', '".$clientid."', '0', '".$tel."', '".$name."', '".$company."', '".$site."', '".$comment."', '', '');
				");
				// ОБРАБАТЫВАЕТ ТОЛЬКО ЕСТЬ ТЕЛЕФОН
			}
		}
		// РАСКЛАДЫВАЕМ МАССИВ НА СТРОКИ
		go ("project/?id=".$POST['idc']."");
	}
	// ДОПУСКАЕМ ОПЕРАТОРА К ПРОЕКТУ
	public function kasting_success($POST) {
		$idc          = $POST['idc'];
		$idc          = pole_valid ($idc, 4 , 'i');
		$idu          = $POST['pred'];
		$idu          = pole_valid ($idu, 4 , 'i');
		$userinfo     = R::findOne( "users", "WHERE id = ?", [$idu] );
		$mycamid      = json_decode( $userinfo['mycamid'], JSON_UNESCAPED_UNICODE);
		// ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		$moderatecamp = json_decode( $userinfo['moderatecamp'], JSON_UNESCAPED_UNICODE);
		// ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		// УДАЛИТЬ ИЗ МАССИВА $moderatecamp элемент $idc
		$key          = array_search($idc,$moderatecamp);
		if(false !== $key) unset($moderatecamp[$key]);
		//ДОБАВИТЬ В $mycamid элемент $idc
		$mycamid[] = $idc;
		$moderatecamp = json_encode($moderatecamp, JSON_UNESCAPED_UNICODE);
		$mycamid      = json_encode($mycamid, JSON_UNESCAPED_UNICODE);
		$company      = R::load('company',$idc);
		R::exec("
			UPDATE `users` SET `moderatecamp` = '".$moderatecamp."', `mycamid` = '".$mycamid."'
			WHERE `users`.`id` = ".$idu.";
		");
		$joincompany  = R::findOne ( "joincompany", "WHERE company_id = ? AND users_id =? AND status = 1 ", [$idc,$idu]);
		$joincompany->status = 2;
		R::store($joincompany);
		$_SESSION['mail']['firstname'] = $userinfo['firstname'];
		$_SESSION['acceptcompany']['company'] = $company['name'];
		$this->sendm("acceptcompany", $userinfo['email']);
		go ("project/kasting/?id=".$POST['idc']."");
	}
	// ДОПУСКАЕМ ОПЕРАТОРА К ПРОЕКТУ
	// ОТКЛОНЯЕМ ЗАЯВКУ НА ВСТУПЛЕНИЕ В ПРОЕКТ
	public function kasting_fail($POST) {
		$idc          = $POST['idc'];
		$idc          = pole_valid ($idc, 4 , 'i');
		$idu          = $POST['pred'];
		$idu          = pole_valid ($idu, 4 , 'i');
		$userinfo     = R::findOne( "users", "WHERE id = ?", [$idu] );
		$company      = R::load('company',$idc);
		$moderatecamp = json_decode( $userinfo['moderatecamp'], JSON_UNESCAPED_UNICODE);
		// ВЫТАСКИВАЕМ КАМПАНИИ В РАБОТЕ
		// УДАЛИТЬ ИЗ МАССИВА $moderatecamp элемент $idc
		$key          = array_search($idc,$moderatecamp);
		if(false !== $key) unset($moderatecamp[$key]);
		$moderatecamp = json_encode($moderatecamp, JSON_UNESCAPED_UNICODE);
		R::exec("
			UPDATE `users` SET `moderatecamp` = '".$moderatecamp."'
			WHERE `users`.`id` = ".$idu.";
		");
		$joincompany = R::findOne ( "joincompany", "WHERE company_id = ? AND users_id = ? AND status = 1 ", [$idc,$idu]);
		$joincompany->status = 3;
		R::store($joincompany);
		$_SESSION['mail']['firstname'] = $userinfo['firstname'];
		$_SESSION['acceptcompany']['company'] = $company['name'];
		$this->sendm("noaccept", $userinfo['email']);
		go ("project/kasting/?id=".$POST['idc']."");
	}
}
?>