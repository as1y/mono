<?php
namespace APP\models;
use RedBeanPHP\R;

class Operator extends \APP\core\base\Model {


    public function gettickets($idc){
        $tickets = R::findOne("tickets", "WHERE user_id = ? AND id = ?" , [ $_SESSION['ulogin']['id'], $idc ]);
        return $tickets;
    }



}
?>