<?php
namespace APP\models;
use RedBeanPHP\R;

class Operator extends \APP\core\base\Model {


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






    public function getcom($idc){
        $company = R::findOne('company', 'WHERE id = ? LIMIT 1', [$idc]);
        return $company;
    }


    public function getmycom($idc){
        $company = R::findOne('company', 'WHERE id = ? LIMIT 1', [$idc]);

        $massivoperatorov = json_decode($company['operators'], true);
        $operatorInProject = array_key_exists($_SESSION['ulogin']['id'],$massivoperatorov);

        if ($operatorInProject == true) return $company;

        if ($operatorInProject == false) return [];



    }





}
?>