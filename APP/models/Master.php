<?php
namespace APP\models;
use RedBeanPHP\R;

class Master extends \APP\core\base\Model {




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


    public static function countresultid($id)
    {

        return R::count("result", "WHERE company_id = ? AND status = 0", [$id]);;
    }








}
?>