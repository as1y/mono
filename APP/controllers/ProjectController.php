<?php
namespace APP\controllers;
use APP\models\Project;
use APP\core\Cache;
class ProjectController extends AppController {


    public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет рекламодателя";
    public $BreadcrumbsControllerUrl = "/panel";


	public function indexAction() {
		//Переменные

        $META = [
            'title' => 'Кабинет рекламодателя',
            'description' => 'Кабинет рекламодателя',
            'keywords' => 'Кабинет рекламодателя ',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Мои проекты"];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);




//		$project = new Project;
//		$razdel = "СВОДКА";
//		$idc = $_GET['id'];
//		$company = $project->getcom($idc);
//		//Переменные
//		$contact =  $project->contact($idc);
//		$result = $project->getres($idc);
//		//Конверсия и тип компании
//		if($contact['ready'] != 0)  $convert = round( (($result['all']/$contact['ready'])*100), 2  )  ;
//		if ($result['all']=="0") $convert = 0;
//		$type = $company['type'];
//		//Конверсия и тип компании
//		$balnow = $project->checkbalanceinproject("client",$idc);
//		$status['balance'] = $project->validbalance($balnow,$company);
//		if ($contact['free'] >= '10') {
//			$status['contact'] = true;
//		} else{
//			$status['contact'] = false;
//		}
//		if ($company['status'] == 1) {
//			$status['company'] = true;
//		} else{
//			$status['company'] = false;
//		}
//		$status['script'] = $project->checkscript($idc);
//		if(isset($_GET['action']) && $_GET['action'] == "play" && isset($_GET['id'])) $project->tryplay($_GET, $status, $idc);
//		if(isset($_GET['action']) && $_GET['action'] == "stop" && isset($_GET['id']) )  $project->pstop($_GET, $idc);
//		$this->set(compact('idc','razdel','company','contact','result','type','convert', 'balnow', 'status'));




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
	public function operatorAction() {
		$project = new Project;
		$razdel = "Операторы на проекте";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$operators = $project->operators($idc);
		$joincompany = $project->joincompany($idc);
		$this->set(compact('idc','razdel','company', 'operators', 'joincompany' ));
	}
	public function kastingAction() {
		$project = new Project;
		$razdel = "Заявки операторов на проект";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$zayavki = $project->zayavki($idc);
		$this->set(compact('idc','razdel','company', 'zayavki' ));
	}
	public function recordAction() {
		$project = new Project;
		$razdel = "Записи";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$oper = "nope";
		$res = "nope";
		$data = "Выбрать дату";
		if (isset($_GET['oper'])) $oper = $_GET['oper'];
		if (isset($_GET['res'])) $res = $_GET['res'];
		if (isset($_GET['data'])) $data = $_GET['data'];
		$allrecord = $project->allrecord($idc);
		$allrecord = $project->frecord($allrecord, $idc, $oper, $res, $data);
		$zapisi = $project->records($idc); // ПОЛУЧЕНИЕ ЗАПИСЕЙ
		$opers = $project->opers($idc);
		$this->set(compact('idc','razdel','company', 'allrecord', 'zapisi', 'data','res','oper','opers' ));
	}
	public function loadbaseAction() {
		$project = new Project;
		$razdel = "Загрузка базы";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$this->set(compact('idc','razdel','company' ));
	}
	public function loadbasetelAction() {
		$project = new Project;
		$razdel = "Загрузка базы";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		if (isset($_GET['path'])) {
			$path = $_GET['path'];
		}else {
			exit("Ошибка в пути файла");
		}
		$filename = "/home/bitrix/ext_www/cplplatform.com/$path";
		if (!file_exists($filename)) redir("/project/?id=$idc");
		$clientid = $company->client['id'];
		$this->set(compact('idc','razdel','company', 'idc','path' ,'clientid', 'filename' ));
	}
	public function scriptAction() {
		$project = new Project;
		$razdel = "Скрипт";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$script = $project->getscript($idc);
		$this->set(compact('idc','razdel','company','script' ));
	}
	public function resultformAction() {
		$project = new Project;
		$razdel = "Форма результата";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$script = $project->getscript($idc);
		$this->set(compact('idc','razdel','company','script' ));
	}
	public function moderAction() {
		$project = new Project;
		$razdel = "Настройки модератора";
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$this->set(compact('idc','razdel','company'));
	}
}
?>