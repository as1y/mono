<?php
namespace APP\models;
use RedBeanPHP\R;

class Operator extends \APP\core\base\Model {


    public function gettickets($idc){
        $tickets = R::findOne("tickets", "WHERE user_id = ? AND id = ?" , [ $_SESSION['ulogin']['id'], $idc ]);
        return $tickets;
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