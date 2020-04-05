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






}
?>