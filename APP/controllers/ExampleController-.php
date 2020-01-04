<?php
namespace APP\controllers;
use APP\models\Add;
use APP\models\Help;
use APP\models\Panel;
use APP\models\Profile;
use APP\models\Project;
use APP\core\Cache;
use APP\models\Wform;

class ProjectController extends AppController {
	public $layaout = 'PROJECT';
	public function indexAction() {
		//Переменные
		$project = new Project;
		$razdel = "СВОДКА";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		//Переменные
		$contact =  $project->contact($idc);
		$result = $project->getres($idc);
		//Конверсия и тип компании
		if($contact['ready'] != 0)  $convert = round( (($result['all']/$contact['ready'])*100), 2  )  ;
		if ($result['all']=="0") $convert = 0;
		$type = $company['type'];
		//Конверсия и тип компании
		$balnow = $project->checkbalanceinproject("client",$idc);
		$status['balance'] = $project->validbalance($balnow,$company);
		if ($contact['free'] >= '10') {
			$status['contact'] = true;
		} else{
			$status['contact'] = false;
		}
		if ($company['status'] == 1) {
			$status['company'] = true;
		} else{
			$status['company'] = false;
		}
		$status['script'] = $project->checkscript($idc);
		if(isset($_GET['action']) && $_GET['action'] == "play" && isset($_GET['id'])) $project->tryplay($_GET, $status, $idc);
		if(isset($_GET['action']) && $_GET['action'] == "stop" && isset($_GET['id']) )  $project->pstop($_GET, $idc);
		$this->set(compact('idc','razdel','company','contact','result','type','convert', 'balnow', 'status'));
	}
	public function resultAction() {
		$project = new Project;
		$razdel = "РЕЗУЛЬТАТЫ";
		$idc = $_GET['id'];
		$comp = $project->getcom($idc);
		$company = $project->companyresult($idc); //СВЯЗЬ С КОМПАНИЕЙ
		$zapisi = $project->records($idc); // ПОЛУЧЕНИЕ ЗАПИСЕЙ
		if (isset($_GET['data'])) {
			$dataresult = $_GET['data'];
			$company = $project->filterresult($company,$dataresult);
		}
		$this->set(compact('idc','razdel','company','zapisi', 'dataresult' ));
	}
	public function setAction() {
		$project = new Project;
		$razdel = "Настройки";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$amoDB = $project->amoDB($idc);
		$this->set(compact('idc','razdel','company','amoDB'));
	}



    public function obryAction(){
        $hash = sha1($_POST['notification_type'].'&'.
            $_POST['operation_id'].'&'.
            $_POST['amount'].'&'.
            $_POST['currency'].'&'.
            $_POST['datetime'].'&'.
            $_POST['sender'].'&'.
            $_POST['codepro'].'&'.
            '/W+oFn75saa2GpoIcmwt1LrH'.'&'.
            $_POST['label']);
        if ( $_POST['sha1_hash'] != $hash or $_POST['codepro'] === true or $_POST['unaccepted'] === true ) exit('error');
        $label =  explode(":", $_POST['label']);
        // Конвертируем данные из Яндекс.Денег
        $clientid = $label[1];
        $mail = $label[0];
        $summ = $_POST['withdraw_amount'];  // Полученная сумма. Используется внизу еще в 3-х местах
        // Конвертируем данные из Яндекс.Денег
        $wform = new Wform;
        $wform->addbalance($summ,$clientid);
        file_put_contents('history.php','Сумма : '.$summ.' | E-MAIL : '.$mail.' '.PHP_EOL.' ', FILE_APPEND );
        $this->layaout = false;
    }
    public function obrwmAction(){
        $key = hash('sha256', $_POST['LMI_PAYEE_PURSE'].
            $_POST['LMI_PAYMENT_AMOUNT'].
            $_POST['LMI_PAYMENT_NO'].
            $_POST['LMI_MODE'].
            $_POST['LMI_SYS_INVS_NO'].
            $_POST['LMI_SYS_TRANS_NO'].
            $_POST['LMI_SYS_TRANS_DATE'].
            '113322'.
            $_POST['LMI_PAYER_PURSE'].
            $_POST['LMI_PAYER_WM']);
        $key = strtoupper($key);
        file_put_contents('wm.log', var_export($_POST, true));
        if ( $key != $_POST['LMI_HASH'] ) exit('error');
        $summ = $_POST['LMI_PAYMENT_AMOUNT'];
        $mail = $_POST['mail'];
        $clientid = $_POST['clientid'];
        $wform = new Wform;
        $wform->addbalance($summ,$clientid);
        file_put_contents('history.php','Сумма : '.$summ.' | E-MAIL : '.$mail.' '.PHP_EOL.' ', FILE_APPEND );
        $this->layaout = false;
    }



    public function addAction(){
        \APP\core\base\View::setMeta('Добавление проекта - '.NAME.' ','Панель управления','Панель управления');
        if(!empty($_POST)){
            $add = new Add;
            $data = $_POST;
            $add->load($data); // Берем из POST только те параметры которые нам нужны
            if(!$add->validate($data)){
                $_SESSION['form_data'] = $add->ATR;
                $add->getErrorsVali();
            } else{
                if($add->saveproject('company', $add->ATR)){
                    go2('panel/');
                }else{
                    $_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
                }
            }
        }
    }
    public function balanceAction(){
        \APP\core\base\View::setMeta('Баланс - '.NAME.' ','Панель управления','Панель управления');
        $project = new Project;
        $balance = $project->checkbalance("client");
        $idclient = $_SESSION['ulogin']['id'];
        $balancelog = $project->balancelog($idclient);
        $this->set(compact('balance', 'balancelog'));
    }
    public function sucbAction(){
        \APP\core\base\View::setMeta('Успешное пополнение баланса - '.NAME.' ','Панель управления','Панель управления');
        $project = new Project;
        $idclient = $_SESSION['ulogin']['id'];
        $this->set(compact('balance', 'balancelog'));
    }
    public function profileAction(){
        \APP\core\base\View::setMeta('Профиль - '.NAME.' ','Панель управления','Панель управления');
        if(!empty($_POST)){
            $profile = new Profile;
            $data = $_POST;
            $profile->load($data); // Берем из POST только те параметры которые нам нужны
            if(!$profile->validate($data) || !$profile->chpass('client') ){
                $profile->getErrorsVali();
            } else{
                if($profile->newpassword('client')){
                    $_SESSION['success'] = "Пароль изминен";
                } else{
                    $_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
                }
            }
        }
    }
    public function helpAction(){
        \APP\core\base\View::setMeta('Помощь - '.NAME.' ','Панель управления','Панель управления');
        if(!empty($_POST)){
            $help = new Help;
            $data = $_POST;
            $help->load($data); // Берем из POST только те параметры которые нам нужны
            if(!$help->validate($data) ){
                $help->getErrorsVali();
            } else{
                $_SESSION['subj'] = $help->ATR['subj'];
                if($help->sendm("help", BASEMAIL) && $help->sendm("helpuser", $_SESSION['ulogin']['email'])){
                    $_SESSION['success'] = "Сообщение отправлено.";
                } else{
                    $_SESSION['errors'] = "Ошибка отправки сообщения";
                }
                unset($_SESSION['subj']);
            }
        }
    }





}
?>