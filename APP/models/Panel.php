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



        $user = R::load("users", $_SESSION['ulogin']['id']);


        if ($DATA['newpass'] != $DATA['newpassrepeat']) return "Новые пароли не совпадают";


        if (!password_verify($DATA['now'], $user->pass)) return "Текущий пароль не верен";

        if ($DATA['now'] = $DATA['newpass']) return "Новый и старый пароль не должны быть одинаковые";

        $newpass = pole_valid ($DATA['newpass'], 50, 's');
        if (!empty($newpass['error'])) return $newpass['error'];

        $user->pass =  password_hash($DATA['newpass'] , PASSWORD_DEFAULT);

        R::store($user);


        return true;
    }


    public  function changenotification($DATA){


        $user = R::load("users", $_SESSION['ulogin']['id']);




        if (!empty($DATA['messages'])){
            $user->nmessages = 1;
        }else{
            $user->nmessages = NULL;
        }

        
        if (!empty($DATA['news'])){
            $user->nnews = 1;
        }else{
            $user->nnews = NULL;
        }

        R::store($user);



        return true;

    }



}
?>