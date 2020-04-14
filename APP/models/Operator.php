<?php
namespace APP\models;
use RedBeanPHP\R;

class Operator extends \APP\core\base\Model {


    public function SetOtkaz($DATA, $company){

        $contact = $this->getcontact($company);
        $contact->status = 3;
        $contact->datacall = date("Y-m-d");
        $contact->operatorcomment = $DATA['operatorcomment'];
        R::store($contact);

        $this->pluscall();


    }

    public function Setbezdostupa($DATA, $company){
        $contact = $this->getcontact($company);
        $contact->status =4;
        $contact->datacall = date("Y-m-d");
        $contact->operatorcomment = $DATA['operatorcomment'];
        R::store($contact);
    }


    public function SetResult($DATA, $company){


        $nomerresult = pole_valid ($_POST['nomerresult'], 15, 's');
        if (!empty($nomerresult['error'])) message($nomerresult['error']);


        $operatorcomment = trim($_POST['operatorcomment']);
        $operatorcomment = strip_tags($operatorcomment);
        $operatorcomment = htmlspecialchars($operatorcomment);
        iconv_strlen($operatorcomment, 'UTF-8');
        if (strlen($operatorcomment) > 1000) message("Комментарий от оператора не может быть больше 1000 символов");

        $ADDMAS

        // Считаем кол-во полей.

        $RESULTMASS = json_decode($company['formresult'],true);
        $countresult = count($RESULTMASS);
        //Считаем кол-во полей

        // Составляем массив результатов
        foreach ($RESULTMASS as $key=>$val){
            $valuepole = "";
            $valuepole = $DATA['customresult'.$key];
            $valuepole = pole_valid ($valuepole, 300, 's');
            if (!empty($valuepole['error'])) message($valuepole['error']);
            $RESULTMASS[$key]['VAL'] = $valuepole;
        }


        // Обновляем статус контакта
        $contact = $this->getcontact($company);
        $contact->status =5;
        $contact->datacall = date("Y-m-d");
        $contact->operatorcomment = $DATA['operatorcomment'];
        R::store($contact);
        // Обновляем статус контакта

        $DATAZAPIS = getrecord2($contact['id']);
        //ПРОВЕРКА ЕСТЬ ЛИ ТАКОЙ КОНТАКТ



        $this->pluscall();

        $result = [
            'users_id' => $_SESSION['ulogin']['id'],
            'company_id' => $company['id'],
            'contact_id' => $contact['id'],
            'DATA' => json_encode($RESULTMASS,true),
            'CONTACTINFO' => json_encode($contact, true),
            'status' => 0,
            'date' => date("Y-m-d"),
            'type' => $company['type'],
            'datazapis' => json_encode($DATAZAPIS, true),
        ];


        $this->addnewBD("result", $result);


    }


    public function SetPerezvon($DATA, $company){


        $nomerperezvona = pole_valid ($_POST['nomerperezvona'], 15, 's');
        if (!empty($nomerperezvona['error'])) message($nomerperezvona['error']);

        $dataperezvona = pole_valid ($_POST['dataperezvona'], 15, 's');
        if (!empty($dataperezvona['error'])) message($dataperezvona['error']);


        $contact = $this->getcontact($company);
        $contact->status = 2;
        $contact->dataperezvona = $dataperezvona;
        $contact->tel = $nomerperezvona;
        $contact->datacall = date("Y-m-d");
        $contact->operatorcomment = $DATA['operatorcomment'];
        R::store($contact);




    }



    public function joincompany($idc){


        $company = R::load('company', $idc);

        $massivoperatorov = json_decode($company['operators'], true);
        if (!$massivoperatorov) $massivoperatorov = [];

        $operatorInProject = array_key_exists($_SESSION['ulogin']['id'],$massivoperatorov);

        // СТАТУС 1 = НА МОДЕРАЦИИ
        // СТАТУС 2 = ОПЕРАТОР РАБОТАЕТ НА ПРОЕКТЕ
        // СТАТУС 3 = ОПЕРАТОРо ЗАБАНЕН НАПРОЕКТЕ

        if ($operatorInProject == false){
            $massivoperatorov[$_SESSION['ulogin']['id']] = 1;
            $company->operators = json_encode($massivoperatorov, true);
            R::store($company);

//            // Дублируем Юзеру
//            $user = R::load(CONFIG['USERTABLE'], $_SESSION['ulogin']['id']);
//            $massivcompaniy = json_decode($company['companies'], true);
//            if (!$massivcompaniy) $massivcompaniy = [];
//            $massivcompaniy[$idc] = 1;
//            $user->companies = json_encode($massivcompaniy, true);
//            R::store($user);

            return true;
        }

        if ($operatorInProject == true){
            if ($massivoperatorov[$_SESSION['ulogin']['id']] == 1) return "Вы уже подали заявку в этот проект";
            if ($massivoperatorov[$_SESSION['ulogin']['id']] == 2) return "Вы уже работаете на этом проекте";
            if ($massivoperatorov[$_SESSION['ulogin']['id']] == 3) return "Вы не можете подать заявку в данный проект";
        }


    }

    public function allcompanies() {
        $companyDB = R::findAll('company', 'WHERE status != 2');


//        foreach($companyDB as $key => $company) {
////			$company["countoperator"];
//            $isCompanyOper = \R::getAll( "SELECT mycamid FROM users WHERE mycamid LIKE ?", ['%'.$company["id"].'%']);
//            $moderCompanyOper = \R::getAll( "SELECT moderatecamp FROM users WHERE moderatecamp LIKE ?", ['%'.$company["id"].'%']);
//            $companyDB[$key]["alloperator"] = ( count($isCompanyOper) + count($moderCompanyOper) );
//        }


        return $companyDB;
    }


    public function mycompanies() {
        $company = R::findAll('company');

        foreach ($company as $key=>$val){
            $massivoperatorov = json_decode($val['operators'], true);
            if (!$massivoperatorov) $massivoperatorov = [];
            $operatorInProject = array_key_exists($_SESSION['ulogin']['id'],$massivoperatorov);
            if ($operatorInProject == false) unset($company[$key]);
        }


        return $company;
    }

    public function getscript($idc) {
        return R::findOne('script', 'WHERE idc = ?', [$idc]);
    }

    public function checkcompany($idc) {
        if (empty($_SESSION['ulogin']['perezvon'])) {
            $checkcompany = R::findOne('company', 'WHERE id = ? AND status = 1', [$idc]);
        }
        else {
            $checkcompany = R::findOne('company', 'WHERE id = ?', [$idc]);
        }
        if ($checkcompany) return $checkcompany;
        return false;
    }

    public function newcontact($idc) {
        return R::findOne('contact', 'WHERE company_id = ? AND status = 0', [$idc]);
    }

    public function setbron($idcont) {

        $contact = R::load('contact',$idcont);
        $contact->status = 1;
        $contact->userId = $_SESSION['ulogin']['id'];
        R::store($contact);


    }

    public function Getbron($idc) {
        return R::findOne('contact', 'company_id = ? AND user_id =? AND status = 1', [$idc, $_SESSION['ulogin']['id']]);
    }

    public  function pluscall(){
            return R::exec (' UPDATE users SET totalcall = totalcall +1 WHERE id = '.$_SESSION['ulogin']['id'].'  ');
        }

    public function getcontact($company){
        $contact = R::findOne('contact', 'WHERE user_id = ? AND status = 1 AND company_id=? LIMIT 1', [$_SESSION['ulogin']['id'], $company['id']]);
        return $contact;
    }

    public function getcom($idc){
        $company = R::findOne('company', 'WHERE id = ? LIMIT 1', [$idc]);
        return $company;
    }

    public function getmycom($idc){
        $company = R::findOne('company', 'WHERE id = ? LIMIT 1', [$idc]);

        $massivoperatorov = json_decode($company['operators'], true);
        if (!$massivoperatorov) $massivoperatorov = [];


        $operatorInProject = array_key_exists($_SESSION['ulogin']['id'],$massivoperatorov);

        // Проверка на допуск оператора к проекту
        if ($operatorInProject == true && $massivoperatorov[$_SESSION['ulogin']['id']] == 2) return $company;

//        if ($operatorInProject == true ) return $company;

        return false;


    }



}
?>