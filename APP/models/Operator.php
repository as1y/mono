<?php
namespace APP\models;
use RedBeanPHP\R;

class Operator extends \APP\core\base\Model {


    public function joincompany($idc){


        $company = R::load('company', $idc);

        $massivoperatorov = json_decode($company['operators'], true);
        if (!$massivoperatorov) $massivoperatorov = [];

        $operatorInProject = array_key_exists($_SESSION['ulogin']['id'],$massivoperatorov);

        if ($operatorInProject == false){

            $addpole = [ $_SESSION['ulogin']['id'] => 1 ];
            $DATA = array_merge($addpole, $massivoperatorov);
            $DATA = json_encode($DATA, true);
            $company->operators =$DATA;
            R::store($company);
            return true;
        }



        // Операторы, которые подали заявки
        // Оператороы, забаненные
        // Оператороы, одобренные
        // Берем 1 массив. Где ключи, это ID оператора, а значение его статус




        return $result;
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





}
?>