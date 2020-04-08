<?php
namespace APP\models;
use RedBeanPHP\R;

class Project extends \APP\core\base\Model {


    public function switcnedostup($idc) {
        //ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
        R::exec(" UPDATE `contact` SET `status` = '0', `users_id` = '0'   WHERE `company_id` = '".$idc."' AND `status` = 4  ;	");
        //ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
        return true;
    }


    public function switchotkaz($idc) {
        //ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
        \R::exec(" UPDATE `contact` SET `status` = '0', `users_id` = '0'   WHERE `company_id` = '".$idc."' AND `status` = 3; ");
        //ОБНОВЛЯЕМ СБРАСЫВАЕМ СТАТУСЫ
        return true;
    }


    public function dubli($idc) {

        $result = R::getAll( "SELECT tel,id FROM `contact` WHERE  `status` = '0' AND `company_id` = '".$idc."' ");
        $tel = array();
        $dublcount = 0;

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

        return "Найдено и удалено <b> ".$dublcount." </b> дублей ";

    }





	public function getcom($idc) {


		if( isset($_SESSION['ulogin']['woof']) || $_SESSION['ulogin']['woof'] == "1") {
			$company = R::findOne('company', 'WHERE id = ? LIMIT 1', [$idc]);
		} else {
			$company = R::findOne('company', 'WHERE id = ? AND client_id = ? LIMIT 1', [$idc, $_SESSION['ulogin']['id']]);
		}
		if(!isset($company)) redir('/panel');
		return $company;
	}

    public  function setscript($script){

        $tbl = R::FindOne("script", "WHERE idc = ?", [$script['idc']]);

        if ($tbl){
            $tbl->script = $script['script'];
            return R::store($tbl);
        }else{

            $this->addnewBD("script", $script);


        }






	    return true;
    }


    public function addpoleformresult ($DATA, $idc){


        $name = pole_valid ($DATA['NAME'], 100, 's');
        if (!empty($name['error'])) return $name['error'];
        $type = pole_valid ($DATA['TYPE'], 5, 'i');
        if (!empty($type['error'])) return $type['error'];



        $company = R::findOne("company", "WHERE id = ?", [$idc]);

        $formresult = json_decode($company['formresult'],TRUE);

        $formresult[] = ["NAME" => $name, "TYPE" => $type] ;

        $formresult = json_encode($formresult,JSON_UNESCAPED_UNICODE);

        $company->formresult = $formresult;
        R::store($company);


        return true;




    }





	public function contact($idc) {
		$mass = R::find("contact", "WHERE company_id = ?", [$idc]);
		$contact['all'] = '0';
		$contact['free'] = '0';
		$contact['ready'] = '0';
		$contact['late'] = '0';
		$contact['otkaz'] = '0';
		$contact['bezdostupa'] = '0';
		$contact['today'] = '0';
		foreach ($mass as  $val) {
			$contact['all']++;
			if ($val['status'] == 0 ) $contact['free']++;
			if ($val['status'] != 0 ) $contact['ready']++;
			if ($val['status'] == 2 ) $contact['late']++;
			if ($val['status'] == 3 ) $contact['otkaz']++;
			if ($val['status'] == 4 ) $contact['bezdostupa']++;
			if ($val['datacall'] == date("Y-m-d") ) $contact['today']++;
		}
		return $contact;
	}
	public function getres($idc) {
		$mass = R::find("result", "WHERE company_id = ?", [$idc]);
		$result['all'] = '0';
		$result['moderation'] = '0';
		$result['today'] = '0';
		foreach ($mass as $val) {
			if ($val['status'] == 1 ) $result['all']++;
			if ($val['status'] == 0 ) $result['moderation']++;
			if ($val['date'] == date("Y-m-d") and $val['status'] == 1  ) $result['today']++;
		}
		return $result;
	}
	public function companyresult($idc) {
		$company = R::load('company', $idc);
		$result = R::dispense( 'result' ); //Таблица результат
		$company->ownResultList[] = $result;
		return $company;
	}
	public function records($idc) {
		$records = R::find('zapisi_new','WHERE company_id = ?' , [$idc]);
		return $records;
	}
	public function operators($idc) {
		$operators = R::findAll( 'users' , ' ORDER BY `points` DESC ' );
		return $operators;
	}
	public function joincompany($idc) {
		$joincompany = R::findAll( 'joincompany' , 'WHERE company_id = ?',[$idc] );
		foreach ($joincompany as $val) {
			$join[$val['users_id']]['record'] = $val['record'];
			$join[$val['users_id']]['message'] = $val['message'];
		}
		return $join;
	}
	public function allrecord($idc) {
		$allrecord = R::find( 'contact' , 'WHERE  company_id = ? AND `status` != 1 AND `status` != 0 ORDER BY `id` DESC', [$idc] );
		return $allrecord;
	}
	public function zayavki($idc) {
		$zayavki = R::findAll("joincompany", "WHERE status = 1 AND company_id = ?", [$idc] );;
		return $zayavki;
	}
	public function allcompany() {
		return  R::findAll("company");
	}
	public function getscript($idc) {
		$script = R::findOne('script','WHERE  idc = ?' , [$idc]);
		return $script['script'];
	}


	public function opers($idc) {
		$allop = R::findAll( 'users' );
		$opers = "";
		foreach ($allop as $row) {
			if ($row['mycamid']) {
				$mycamid = json_decode($row['mycamid'], true);
				$sm = in_array($idc, $mycamid);
				if ($sm) {
					$opers[$row['id']] = "".$row['firstname']." " ;
				}
			}
		}
		return $opers;
	}
	public function frecord($allrecord, $idc, $oper, $res, $data) {
		if ($res != "nope") {
			foreach ($allrecord as $key => $val) {
				if ($val['status'] !== $res) unset($allrecord[$key]);
			}
		}
		if ($data != "Выбрать дату") {
			foreach ($allrecord as $key => $val) {
				if ($val['datacall'] != $data) unset($allrecord[$key]);
			}
		}
		if ($oper != "nope") {
			foreach ($allrecord as $key => $val) {
				if ($val['users_id'] != $oper) unset($allrecord[$key]);
			}
		}
		return $allrecord;
	}
	public function checkbalance($table) {
		$balnow['bal'] = '0';
		$balnow = R::load($table, $_SESSION['ulogin']['id']);
		return $balnow['bal'];
	}
	public function filterresult($company,$dataresult) {
		foreach ( $company->ownResultList as $key=>$val) {
			if ($val['date'] != $dataresult) {
				unset($company->ownResultList[$key]);
			}
		}
		return $company;
	}
	public function checkbalanceinproject($table,$idc) {
		$balnow['bal'] = '0';
		if( isset($_SESSION['ulogin']['woof']) || $_SESSION['ulogin']['woof'] == "1") {
			$cid = R::load("company", $idc);
			$balnow = R::load($table, $cid['client_id']);
		} else {
			$balnow = R::load($table, $_SESSION['ulogin']['id']);
		}
		return $balnow['bal'];
	}
	public function validbalance($balnow, $company) {
		$balneed = $company['cfc']*($company['daylimit']/2);
		if($balnow >= $balneed) return true;
		return false;
	}
	public function checkscript($idc) {
		$script = R::findOne('script','WHERE  company_id = ?' , [$idc]);
		if (strlen($script['text']) <= 100) return false;
		return true;
	}
	public function tryplay($GET, $status, $idc) {
		$timenow = date("H:i");
		$utro = "09:00";
		$vecher = "19:00";
		if ( strtotime($timenow) > strtotime($vecher)  ) mes("Не время");
		if($status['balance'] == false) mes('Проект НЕ активирован: Пополните баланс.');
		if($status['contact'] == false) mes('Проект НЕ активирован: Добавьте контактов.');
		if($status['script'] == false) mes('Проект НЕ активирован: Отредактируйте скрипт разговора.');
		if($status['balance'] == true &&  $status['contact'] == true && $status['script'] == true) {
			R::exec(" UPDATE `company` SET `status` = '1' WHERE `id` = '".$idc."' ");
		}
		go2('project/?id='.$GET['id'].'');
	}
	public function pstop($GET, $idc) {
		R::exec(" UPDATE `company` SET `status` = '2' WHERE `id` = '".$idc."' ");
		go2('project/?id='.$GET['id'].'');
	}
	public function balancelog($idclient) {
		$balancelog = R::find('balancelogclient','WHERE client_id = ?',[$idclient]);
		return $balancelog;
	}



	// ОКОНЧАНИЕ КЛАССА
}
?>