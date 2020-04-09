<?php
namespace APP\models;
use RedBeanPHP\R;

class Panel extends \APP\core\base\Model {


    public function gettickets(){
        $tickets = R::findAll("tickets", "WHERE user_id = ? AND parent = 1 ORDER by id ASC", [$_SESSION['ulogin']['id']]);
        return $tickets;
    }



    public function addticket($DATA){

        $zagolovok = pole_valid ($DATA['zagolovok'], 50, 's');
        if (!empty($zagolovok['error'])) return $zagolovok['error'];

        $text = pole_valid ($DATA['text'], 500, 's');
        if (!empty($text['error'])) return $text['error'];


        $tickets = R::count('tickets','WHERE  user_id = ? AND status = 1' , [$_SESSION['ulogin']['id']]);

        if (count($tickets) >= 5) return "Можно создать не более 5 открытых тикетов";


        $addpole = [
            'userId' => $_SESSION['ulogin']['id'],
            'parent' => 1 ,
            'open' => date("y-m-d h:m:s") ,
            'status' => 1 ,
            'count' => 1,
            'look' => NULL
        ];

        $DATA = array_merge($addpole, $DATA);

        $this->addnewBD("tickets", $DATA);

        return true;

    }

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

        $_SESSION['ulogin']['nnews'] = $user->nnews;
        $_SESSION['ulogin']['nmessages'] = $user->nmessages;
        R::store($user);



        return true;

    }



}
?>