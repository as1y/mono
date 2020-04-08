<?php
namespace APP\controllers;
use APP\models\Bazaupload;
use APP\models\Project;
use APP\core\Cache;
use APP\models\Settings;

class ProjectController extends AppController {


    public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Кабинет рекламодателя";
    public $BreadcrumbsControllerUrl = "/panel";


	public function indexAction() {
		//Переменные

        $project = new Project;
        $company = $project->getcom($_GET['id']);

        $META = [
            'title' => 'Кабинет рекламодателя',
            'description' => 'Кабинет рекламодателя',
            'keywords' => 'Кабинет рекламодателя ',
        ];


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Проект ".$company['company']];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


		//Переменные
		$contact =  $project->contact($_GET['id']);
		$result = $project->getres($_GET['id']);
		//Конверсия и тип компании
		if($contact['ready'] != 0)  $convert = round( (($result['all']/$contact['ready'])*100), 2  )  ;
		if ($result['all']=="0") $convert = 0;
		$type = $company['type'];
		//Конверсия и тип компании
		$balnow = $project->checkbalanceinproject("client",$_GET['id']);
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
		$status['script'] = $project->checkscript($_GET['id']);
		if(isset($_GET['action']) && $_GET['action'] == "play" && isset($_GET['id'])) $project->tryplay($_GET, $status, $_GET['id']);
		if(isset($_GET['action']) && $_GET['action'] == "stop" && isset($_GET['id']) )  $project->pstop($_GET, $_GET['id']);
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
		$company = $project->getcom($_GET['id']);

        $META = [
            'title' => 'Настройки проекта ',
            'description' => 'Настройки проекта ',
            'keywords' => 'Настройки проекта ',
        ];
        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Настрийки проекта ".$company['company']];
        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);


        if ($_POST){


            $settings = new Settings();
            $settings->load($_POST); // Берем из POST только те параметры которые нам нужны

            $validation = $settings->validate($_POST);


        if ($validation){
            if ($settings->editsettingsroject($_POST)){
                $_SESSION['success'] = "Изменения внесены";
                redir("/project/set/?id=".$_POST['idc']);
            }else{
                $_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
            }
        }

        if (!$validation){
            $settings->getErrorsVali();
        }

        }

		$this->set(compact('company'));
	}




	public function loadbasetelAction() {


        if($this->isAjax()){

            $bazaupload = new Bazaupload();


            //  $validate =  $bazaupload->validate($_POST);
           $result =  $bazaupload->bazaupl($_POST);


            if ($result != 1)  message($result);

           if ($result === true) go("project/base/?id=".$_POST['idc']);




        }


		$project = new Project;
		$idc = $_GET['id'];
		$company = $project->getcom($idc);


        $META = [
            'title' => 'Настройки проекта ',
            'description' => 'Настройки проекта ',
            'keywords' => 'Настройки проекта ',
        ];
        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Добавление базы контактов ".$company['company']];
        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);



		if (isset($_GET['path'])) {
			$path = $_GET['path'];
		}else {
			exit("Ошибка в пути файла");
		}


		$filename = WWW."/".$path;


		if (!file_exists($filename)) {
            $_SESSION['errors'] = "Ошибка при обработке файла";
            redir("/project/?id=$idc");
        }


		$clientid = $company->client['id'];
		$this->set(compact('idc','company', 'idc','path' ,'clientid', 'filename' ));
	}



	//Готово
	public function scriptAction() {

		$project = new Project;
		$idc = $_GET['id'];
		$company = $project->getcom($idc);
		$script = $project->getscript($idc);


        $META = [
            'title' => 'Скрипт звонка',
            'description' => 'Скрипт звонка',
            'keywords' => 'Скрипт звонка ',
        ];


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Скрипт звонка ".$company['company']];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        if($this->isAjax()){


            $idc = $_POST['idc'];
            iconv_strlen($_POST['script'], 'UTF-8');


             $project->setscript($_POST);


            exit("true");


        }


		$this->set(compact('idc','company','script' ));
	}
    //Готово


    public function baseAction() {

        $project = new Project;
        $idc = $_GET['id'];
        $company = $project->getcom($idc);

        if (!empty($_GET['action']) && $_GET['action'] == "switcnedostup"){

           $result = $project->switcnedostup($idc);
            if ($result == true)  {
                $_SESSION['success'] = "Статус контактов изменен";
                redir("/project/base/?id=".$idc);
            }
        }


        if (!empty($_GET['action']) && $_GET['action'] == "switchotkaz"){

            $result = $project->switchotkaz($idc);
            if ($result == true)  {
                $_SESSION['success'] = "Статус контактов изменен";
                redir("/project/base/?id=".$idc);
            }
        }


        if (!empty($_GET['action']) && $_GET['action'] == "dubli"){

            $result = $project->dubli($idc);

                $_SESSION['success'] = $result;
                redir("/project/base/?id=".$idc);

        }





        $META = [
            'title' => 'Работа с базой контактов',
            'description' => 'Работа с базой контактов',
            'keywords' => 'Работа с базой контактов ',
        ];


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "База контактов ".$company['company']];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

        $contact =  $project->contact($idc);
        $result = $project->getres($idc);

        if ($_POST){

//            show($_FILES['file']);
            $validation = $project->filevalidation($_FILES['file']);


            if (!$validation){
                $project->getErrorsVali();
            }

            if ($validation){


                $name = md5(uniqid(rand(),1));
                $urlnew = "temp_load/".$name.".csv";
                copy($_FILES['file']['tmp_name'], $urlnew); // Копируем из общего котла в тизерку
                $name = trim($name);

                $path = "temp_load/".$name.".csv";




                redir("/project/loadbasetel/?id=".$_POST['idc']."&path=".$path);


            }


        }






        $this->set(compact('idc','company', 'contact', 'result' ));
    }




	public function resultformAction() {
		$project = new Project;
		$idc = $_GET['id'];
		$company = $project->getcom($idc);


		if (!empty($_GET['action']) && $_GET['action'] == "delete"){

		    show($_GET);
            $result = $project->delpoleformresult($_GET, $idc);


            if ($result == 1){
                $_SESSION['success'] = "Поле удалено";
                redir("/project/resultform/?id=".$idc);
            }else{
                $_SESSION['errors'] = $result;
            }




        }


		if ($_POST){

           $result =  $project->addpoleformresult($_POST,$idc);
            if ($result == 1){
                $_SESSION['success'] = "Дополнительное поле добавлено";
                redir("/project/resultform/?id=".$idc);
            }else{
                $_SESSION['errors'] = $result;
            }
        }




        $META = [
            'title' => 'Конструктор формы результата',
            'description' => 'онструктор формы результата',
            'keywords' => 'онструктор формы результата',
        ];


        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "Конструктор формы результата ".$company['company']];

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);





		$this->set(compact('idc','company' ));
	}


}
?>