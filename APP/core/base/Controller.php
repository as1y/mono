<?php
namespace APP\core\base;
abstract class Controller {
	public $route = [];
	public $view;
	public $layaout;
	public $data=[];
	public function __construct($route){
		$this->route = $route;
		$this->view = $route['action'];


        //Если с сессией зашел в логин или на главную
        if (empty($_SESSION['ulogin']) && $route['controller'] != "Main"  && $route['controller'] != "User"  ){
            redir('/user/');
        }
        //Если с сессией зашел в логин или на главную


        //Защита от ебанутых по контроллерам

        if (!empty($_SESSION['ulogin']['role']) && $_SESSION['ulogin']['role'] == "R"){
            if ($route['controller'] == "Operator")  redir("/master");





        }

        if (!empty($_SESSION['ulogin']['role']) && $_SESSION['ulogin']['role'] == "O"){
            if ($route['controller'] == "Master")  redir("/operator");
            if ($route['controller'] == "Project")  redir("/operator");
        }


        if (!empty($_SESSION['ulogin']['code']))  $_SESSION['errors'] = "Подтвердите E-mail";


//
//		// РАСПРЕДЕЛЕНЕ ПРАВ (ПОКА ПРОСТОЕ)
//		if (empty($_SESSION['ulogin']) && $route['controller'] != "Main"  && $route['controller'] != "User" && $route['controller'] != "Spec"  ){
//			redir('/');
//		}
//		//РАСПРЕДЕЛЕНИЕ ПРАВ НА АНДИНА
//		if ($route['controller'] == "Admin"){
//			if( empty($_SESSION['ulogin']['woof']) || $_SESSION['ulogin']['woof'] != "1"){
//				redir('/panel');
//			}
//		}
//


	}


	public function getView(){
		$vObj = new View($this->route, $this->layaout, $this->view );
		$vObj->render($this->data);
	}


	public function set($data){
		$this->data = $data;
	}



	function isAjax ()
	{
		if (
			isset($_SERVER['HTTP_X_REQUESTED_WITH'])
			&& $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest")
			return true;
		return false;
	}
}



?>