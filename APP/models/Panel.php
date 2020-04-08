<?php
namespace APP\models;
use RedBeanPHP\R;

class Panel extends \APP\core\base\Model {



    public function allcompany($idclient)
    {
        if($idclient == "Admin")
        {
            $company = R::findAll("company");
        }
        else
        {
            $company = R::find("company", "WHERE client_id = ?", [$idclient]);
        }
        return $company;
    }



    public function changepassword($DATA){




        if ($DATA['newpass'] != $DATA['newpassrepeat']) return "Новые пароли не совпадают";

        $user = R::load("users", $_SESSION['ulogin']['id']);

        if (!password_verify($DATA['now'], $user->pass)) return "Текущий пароль не верен";



        return true;
    }






}
?>