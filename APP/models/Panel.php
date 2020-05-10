<?php
namespace APP\models;
use APP\core\Mail;
use RedBeanPHP\R;

class Panel extends \APP\core\base\Model {




    public function invoicesuccess($id){
        $invoice = R::load("invoice", $id);

        if ($invoice['status'] == 0){

            $user = R::load(CONFIG['USERTABLE'], $invoice['users_id']);
            $this->addbalanceuser($user, $invoice['summa'], "Пополнение баланса через ".$invoice['paymethod'] );
            $invoice->status = 1;
            R::store($invoice);




        }
        return true;
    }



    public function getsobesednik($idu){


        $sobesednik = R::findOne("users", "WHERE id = ?" , [$idu]);
        return $sobesednik;


    }

    public function clearuvedmolenie($dialog){
        if ($dialog->uvedomlenie == $_SESSION['ulogin']['id']){
            $dialog->uvedomlenie = NULL;
            R::store($dialog);
        }
        return true;

    }




    public function checkdialog($idu){


        $sobesednik = R::findOne("dialog", "WHERE p1 = ? AND p2 = ?" , [$idu, $_SESSION['ulogin']['id']]);
        if ($sobesednik) return $sobesednik;

        $sobesednik2 = R::findOne("dialog", "WHERE p1 = ? AND p2 =?" , [$_SESSION['ulogin']['id'], $idu]);
        if ($sobesednik2) return $sobesednik2;

        return false;

    }


    public function deletedialog($idd){

        $dialog = R::load("dialog", $idd);
        if ($dialog)  R::trash($dialog);


        return true;
    }


    public function getdialogsinfo(){


        // Раскладка инвойсов
        $dialogs = [];

        $dialog1 = R::findAll("dialog", "WHERE p1 = ?", [$_SESSION['ulogin']['id']]);

        foreach ($dialog1 as $key=>$val) {
            if ($val['messages'] != NULL) $dialogs[] = $val;

        }

        $dialog2 = R::findAll("dialog", "WHERE p2 = ?", [$_SESSION['ulogin']['id']]);
        foreach ($dialog2 as $key=>$val) {
            if ($val['messages'] != NULL) $dialogs[] = $val;
        }



        return $dialogs;


    }




    public function getoperators($limit = 100){
        $operators = R::findALL("users", "WHERE role = ? AND aboutme != '' ORDER BY `datareg` DESC  LIMIT ".$limit." ", ["O"]);
        return $operators;
    }


    public function createviplata($DATA){

        self::$USER->bal = self::$USER->bal - $DATA['summa'];
        R::store(self::$USER);

        $DATA = [
            'users_id' => $_SESSION['ulogin']['id'],
            'date' => date("Y-m-d H:i:s"),
            'sum' => $DATA['summa'],
            'comment' => "Вывод средств на <b>".$DATA['sposob']."<b>",
            'type' => "credit",
            'status' => 0,
            'method' => $DATA['sposob'],
            ];

        $this->addnewBD("balancelog", $DATA);



        return true;
    }



    public function balancelog(){
        $balancelog = R::findAll("balancelog", "WHERE users_id = ?" , [ $_SESSION['ulogin']['id'] ]);
        return $balancelog;
    }


    public function addrequis($DATA){

        if (!empty($DATA['qiwi'])){
            $requis = json_decode(self::$USER->requis, true);
            $requis['qiwi'] = $DATA['qiwi'];
            $requis = json_encode($requis, true);
            self::$USER->requis = $requis;
        }

        if (!empty($DATA['yamoney'])){
            $requis = json_decode(self::$USER->requis, true);
            $requis['yamoney'] = $DATA['yamoney'];
            $requis = json_encode($requis, true);
            self::$USER->requis = $requis;
        }


        if (!empty($DATA['card'])){
            $requis = json_decode(self::$USER->requis, true);
            $requis['card'] = $DATA['card'];
            $requis = json_encode($requis, true);
            self::$USER->requis = $requis;
        }



        R::store(self::$USER);

        return true;
    }





    public function getrefferals(){
        $allref = R::findAll('users', 'WHERE ref = ?', [$_SESSION['ulogin']['id']]);
        return $allref;
    }







    public function  saverecord ($name){


        $user = R::load("users", $_SESSION['ulogin']['id']);
        $user->audio = $name;
        R::store($user);
        return true;

    }



    public function  resetrecord (){

        unlink(AudioUploadPath.$_SESSION['ulogin']['audio']);

        $user = R::load("users", $_SESSION['ulogin']['id']);
        $user->audio = NULL;
        R::store($user);
        $_SESSION['ulogin']['audio'] = NULL;

        return true;

    }


    public function getdialog($idd){
        $dialog = R::findOne("dialog", "WHERE id = ? " , [$idd]);
        return $dialog;
    }


    public static function lookingsobesednik($dialog){
        $sobesednikid = ($_SESSION['ulogin']['id'] != $dialog['p1']) ? $dialog['p1'] : $dialog['p2'];
        $sobesednik = R::findOne("users", "WHERE id = ?" , [$sobesednikid]);
        return $sobesednik;

    }




    public function addmessage($DATA, $idd){

        $dialog = R::findOne("dialog", "WHERE id = ?" , [$idd]);

        // Валидация
        if (!$dialog) return "Ошибка в ID диалога1";
        if ($dialog['p1'] != $_SESSION['ulogin']['id'] && $dialog['p2'] != $_SESSION['ulogin']['id']) return "Ошибка в ID диалога2";
        if (!empty(pole_valid($DATA['enter-message'], "s", 50)['error']))  return pole_valid($DATA['enter-message'], "s", 50)['error'];




        $sendnotice = ($dialog['p1'] == $_SESSION['ulogin']['id']) ? $dialog['p2']: $dialog['p1']; //ID чувака кому нужно уведомление


        $messages = json_decode($dialog->messages,TRUE);
        $messages[] = ["author" => $_SESSION['ulogin']['id'] , "message" => $DATA['enter-message'], "date" => date("H:s:m")];

        $messages = json_encode($messages, true);
        $dialog->messages = $messages;
        $dialog->uvedomlenie = $sendnotice;
        $dialog->zagolovok = obrezanie($DATA['enter-message'], 20);

        R::store($dialog);

        $komyuser = R::Load("users", $sendnotice);
        $USN = [
            'user' => $komyuser['username'],
        ];

        if ($komyuser['nmessages'] == 1)
        Mail::sendMail("message", "Новое сообщение на ".CONFIG['NAME'], $USN, ['to' => [['email' =>$komyuser['email']]]] );


        return true;


    }


    public function newbill(){




    }


    public function generatePayeerform($DATA, $invoiceid){

        $form = [];


        $m_shop = '1009839670';
        $m_orderid = $invoiceid;
        $m_amount = number_format($DATA['summa'], 2, '.', '');
        $m_curr = 'RUB';
        $m_desc = base64_encode('Счет №'.$invoiceid.' - Пополнение баланса в сервисе cashcall.ru');
        $m_key = 'XvmQQSVbf8aV';

        $arHash = array(
            $m_shop,
            $m_orderid,
            $m_amount,
            $m_curr,
            $m_desc
        );



        $arHash[] = $m_key;
        $sign = strtoupper(hash('sha256', implode(':', $arHash)));




        $form['action'] = 'https://payeer.com/merchant/';
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_shop', 'value' => $m_shop];
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_orderid', 'value' => $m_orderid];
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_amount', 'value' => $m_amount];
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_curr', 'value' => $m_curr];
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_desc', 'value' => $m_desc];
        $form['input'][] = ['type' => 'hidden', 'name' => 'm_sign', 'value' => $sign];
//        $form['input'][] = ['type' => 'submit', 'm_process' => 'm_sign', 'value' => 'send'];


//        $form['input'][] = ['type' => 'hidden', 'name' => 'm_params', 'value' => $m_params];

        return $form;

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



    public function sendallmail(){


        $users = R::find("users");


        foreach ($users as $key=>$val){

            echo $val['username']."<br>";
            echo $val['email']."<br>";





        }



    }




    public function changepassword($DATA){



        $user = R::load("users", $_SESSION['ulogin']['id']);


        if ($DATA['newpass'] != $DATA['newpassrepeat']) return "Новые пароли не совпадают";


        if (!password_verify($DATA['now'], $user->pass)) return "Текущий пароль не верен";

        if ($DATA['now'] == $DATA['newpass']) return "Новый и старый пароль не должны быть одинаковые";

        $newpass = pole_valid ($DATA['newpass'], 50, 's');
        if (!empty($newpass['error'])) return $newpass['error'];

        $user->pass =  password_hash($DATA['newpass'] , PASSWORD_DEFAULT);

        R::store($user);


        return true;
    }


    public  function changeprofileinfo($DATA){


        if ($DATA['role'] != "R" && $DATA['role'] != "O") return "Ошибка в передаче данных";

        $DATA['aboutme'] = trim($DATA['aboutme']);
        $DATA['aboutme'] = strip_tags($DATA['aboutme']);
        $DATA['aboutme'] = htmlspecialchars($DATA['aboutme']);
        if (strlen($DATA['aboutme']) > 1000) return "Презентация должна быть не больше 1000 символов";

        $username = pole_valid ($DATA['username'], 50, 's');
        if (!empty($username['error'])) return $username['error'];


        $user = R::load("users", $_SESSION['ulogin']['id']);


        $user->role = $DATA['role'];
        $user->aboutme = $DATA['aboutme'];
        $user->username = $username;


        $_SESSION['ulogin']['role'] = $DATA['role'];
        $_SESSION['ulogin']['aboutme'] =$DATA['aboutme'];
        $_SESSION['ulogin']['username'] = $username;

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


    public  function changeurlegal($DATA){

        $MASS = [
            'company' => $DATA['company'],
            'site' => $DATA['site'],
            'urlico' => $DATA['urlico'],
            'ogrn' => $DATA['ogrn'],
            'postadress' => $DATA['postadress'],
            'phone' => $DATA['phone'],
            'uradres' => $DATA['uradres'],
        ];

        self::$USER->urlegal = json_encode($MASS, true);

        R::store(self::$USER);



        return true;

    }

    public  function validationur($DATA){

        $rules = [
            'required' => [
                ['company'],
                ['site'],
                ['urlico'],
                ['ogrn'],
                ['postadress'],
                ['phone'],
                ['uradres'],

            ],

        ];

        $labels = [
            'company' => '<b>Название компании</b>',
            'site' => '<b>САЙТ</b>',
            'urlico' => '<b>Юридическое лицо</b>',
            'ogrn' => '<b>ОГРН</b>',
            'postadress' => '<b>Почтовый адрес</b>',
            'phone' => '<b>Телефон</b>',
            'uradres' => '<b>Юридический адрес</b>',

        ];

       return $this->validatenew($DATA, $rules, $labels);

    }

    public  function validationpayurinfo($DATA){

        $rules = [
            'required' => [
                ['inn'],
                ['kpp'],
                ['bic'],
                ['rs'],
                ['kor'],
                ['bank'],
                ['fio'],
                ['nds'],
            ],

        ];

        $labels = [
            'inn' => '<b>ИНН</b>',
            'kpp' => '<b>КПП</b>',
            'bic' => '<b>БИК</b>',
            'rs' => '<b>Р\С</b>',
            'kor' => '<b>Кор. счет</b>',
            'bank' => '<b>Банк</b>',
            'fio' => '<b>ФИО контактного лица</b>',
            'nds' => '<b>НДС</b>',


        ];

        return $this->validatenew($DATA, $rules, $labels);

    }

    public  function cahngepayurinfo($DATA){

        $MASS = [
            'inn' => $DATA['inn'],
            'kpp' => $DATA['kpp'],
            'bic' => $DATA['bic'],
            'rs' => $DATA['rs'],
            'kor' => $DATA['kor'],
            'bank' => $DATA['bank'],
            'fio' => $DATA['fio'],
            'nds' => $DATA['nds'],
        ];

        self::$USER->payurinfo = json_encode($MASS, true);

        R::store(self::$USER);



        return true;

    }



}
?>