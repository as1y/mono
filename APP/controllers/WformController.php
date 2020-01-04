<?php
namespace APP\controllers;
use APP\models\Wform;
use APP\core\Cache;
class WformController extends AppController {
	public function indexAction(){
		//Проверяем AJAX или нет
		if($this->isAjax()){
			$data = $_POST;
			$wform = new Wform;
			//PROJECT
			if (isset($_POST['dubli_f'])) $wform->dubli($data);
			if (isset($_POST['switcnedostup_f'])) $wform->switcnedostup($data);
			if (isset($_POST['switchotkaz_f'])) $wform->switchotkaz($data);
			if (isset($_POST['addcrit_f'])) $wform->addcrit($data);
			if (isset($_POST['delcrit_f'])) $wform->delcrit($data);
			if (isset($_POST['banuser_f'])) $wform->banuser($data);
			if (isset($_POST['dropuser_f'])) $wform->dropuser($data);
			if (isset($_POST['changeinformation_f'])) $wform->changeinformation($data);
			if (isset($_POST['moderUpdateCompany_f'])) $wform->moderUpdateCompany($data);
			if (isset($_POST['moderClearContacts_f'])) $wform->moderClearContacts($data);
			if (isset($_POST['changescript_f'])) $wform->changescript($data);
			if (isset($_POST['addpole_f'])) $wform->addpole($data);
			if (isset($_POST['delpole_f'])) $wform->delpole($data);
			if (isset($_POST['fback_f'])) $wform->fback($data);
			if (isset($_POST['bazaupl_f'])) $wform->bazaupl($data);
			if (isset($_POST['kasting_success_f'])) $wform->kasting_success($data);
			if (isset($_POST['kasting_fail_f'])) $wform->kasting_fail($data);
			//PROJECT
		} else{
			echo "Запрос не AJAX";
		}
		$this->layaout = false;
	}
	public function filecsvAction(){
		$this->layaout = false;
		if($this->isAjax()){
			if($_FILES['csv']['size']>0) {
				dumpf($_FILES['csv']);
				if ($_FILES['csv']['size'] > 5000000) {
					echo "1";
					exit();
				}
				if ($_FILES['csv']['size'] < 500) {
					echo "2";
					exit();
				}
				if ($_FILES['csv']['type'] != "application/octet-stream") {
					echo "3";
					exit();
				}
				$blacklist = array(".php", ".phtml", ".php3", ".php4");
				foreach ($blacklist as $item) {
					if(preg_match("/$item\$/i", $_FILES['csv']['name'])) {
						echo "4";
						exit;
					}
				}
				if(!preg_match("/.csv\$/i", $_FILES['csv']['name'])) {
					echo "4";
					exit;
				}
				$name = md5(uniqid(rand(),1));
				$urlnew = "temp_load/".$name.".csv";
				copy($_FILES['csv']['tmp_name'], $urlnew); // Копируем из общего котла в тизерку
				$name = trim($name);
				echo $name;
			} else{
				echo "200x200.jpg";
			}
		}else{
			exit('Пошел на хуй от сюда');
		}
	}
	// СКОБКА ОКОНЧАНИЯ КЛАССА
}
?>