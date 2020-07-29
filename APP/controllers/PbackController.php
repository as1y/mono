<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PbackController extends AppController {

    public function indexAction()
    {

     $this->layaout = false;

        $Panel =  new Panel();

//        if (empty($_POST)) redir("/");


        if (!empty([$_POST])){

            // Получение постбека

            $dat = json_encode($_POST);

            $DATA = [
                'mass' => $dat,
            ];

            $Panel->addnewBD("conversion", $DATA);

        }




    }




}
?>