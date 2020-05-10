<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PayController extends AppController {
	public $layaout = 'PANEL';
    public $mininvoice = 1000;



    // Прием платежей на сай
    public function redirectAction(){

        $Panel =  new Panel();


        $META = [
            'title' => 'Пополнение баланса',
            'description' => 'Пополнение баланса',
            'keywords' => 'Пополнение баланса',
        ];
        \APP\core\base\View::setMeta($META);

        if ($_SESSION['ulogin']['role'] == "R") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет рекламодателя", 'Url' => "/master"];
        if ($_SESSION['ulogin']['role'] == "O") $BREADCRUMBS['HOME'] = ['Label' => "Кабинет  оператора", 'Url' => "/operator"];
        $BREADCRUMBS['DATA'][] = ['Label' => "Пополнение баланса"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        if ($_POST['summa'] < $this->mininvoice){

            $_SESSION['errors'] = "Минимальное пополнение ".$this->mininvoice." рублей<br>";
            redir("/panel/balance/");

        }


        $invoice =[
            'users_id' => $_SESSION['ulogin']['id'],
            'paymethod' => $_POST['paymethod'],
            'summa' => $_POST['summa'],
            'status' => 0
        ];



        if ($_POST && $_POST['paymethod'] == "Payeer"){
            $invoiceid = $Panel->addnewBD("invoice", $invoice);
           $form = $Panel->generatePayeerform($_POST, $invoiceid);
        }


        if ($_POST && $_POST['paymethod'] == "Beznal"){

            if (!$Panel::$USER['urlegal']){
                $_SESSION['errors'] = "Чтобы выставить счет по безналичному рассчету необходимо заполнить юридическую информацию";
                redir("/panel/balance/");
            }


            if (!$Panel::$USER['payinfo']){
                $_SESSION['errors'] = "Чтобы выставить счет по безналичному рассчету необходимо заполнить платежную информацию";
                redir("/panel/balance/");
            }


            exit("gu");
//            $invoiceid = $Panel->addnewBD("invoice", $invoice);
//            $form = $Panel->generatePayeerform($_POST, $invoiceid);





        }




        $this->set(compact('form'));



    }



    public function obrabotkaAction(){
        $this->layaout = false;

        $Panel =  new Panel();

        $META = [
            'title' => 'Пополнение баланса',
            'description' => 'Пополнение баланса',
            'keywords' => 'Пополнение баланса',
        ];
        \APP\core\base\View::setMeta($META);




        if (!empty($_GET['method']) && $_GET['method'] == "Payeer"){


            if (!in_array($_SERVER['REMOTE_ADDR'], array('185.71.65.92', '185.71.65.189', '149.202.17.210'))) exit("ip");


            if (isset($_POST['m_operation_id']) && isset($_POST['m_sign']))
            {
                $m_key = 'XvmQQSVbf8aV';

                $arHash = array(
                    $_POST['m_operation_id'],
                    $_POST['m_operation_ps'],
                    $_POST['m_operation_date'],
                    $_POST['m_operation_pay_date'],
                    $_POST['m_shop'],
                    $_POST['m_orderid'],
                    $_POST['m_amount'],
                    $_POST['m_curr'],
                    $_POST['m_desc'],
                    $_POST['m_status']
                );

                if (isset($_POST['m_params']))
                {
                    $arHash[] = $_POST['m_params'];
                }

                $arHash[] = $m_key;

                $sign_hash = strtoupper(hash('sha256', implode(':', $arHash)));

                if ($_POST['m_sign'] == $sign_hash && $_POST['m_status'] == 'success')
                {


                    dumpf($_POST);
                    //Добавляем баланс пользователю через параметры или БД
                    $Panel->invoicesuccess($_POST['m_orderid']);

                    //Добавляем баланс пользователя через баланс или БД
                    ob_end_clean(); exit($_POST['m_orderid'].'|success');
                }

                ob_end_clean(); exit($_POST['m_orderid'].'|error');
            }





        }





    }

    // Прием платежей на сайте




}
?>