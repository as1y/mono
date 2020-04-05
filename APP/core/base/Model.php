<?php
namespace APP\core\base;
use RedBeanPHP\R;

abstract class Model
{
	public $ATR = [];
	public $errors = [];
	public $rules = [];

	public function __construct()
	{
		R::setup(CONFIG['db']['dsn'],CONFIG['db']['user'],CONFIG['db']['pass']);
		//  R::fancyDebug( TRUE );
		//  R::freeze(TRUE);
	}
	// ЗАГРУЗКА ДАННЫХ ИЗ ФОРМЫ



	public function load($data)
	{
		foreach($this->ATR as $name => $val)
		{
			if(isset($data[$name])) $this->ATR[$name] = $data[$name];
		}
	}
	// ЗАГРУЗКА ДАННЫХ ИЗ ФОРМЫ
	// ПРОВЕРКА ДАННЫХ
	public function validate($data)
	{
		$v = new \Valitron\Validator($data);
		$v->rules($this->rules);
		if($v->validate())
		{
			return true;
		}
		$this->errors = $v->errors();
		return false;
	}
	// ПРОВЕРКА ДАННЫХ
	// Красивый вывод ошибок валидации

	public function getErrorsVali()
	{
		$errors = "<ul>";
		foreach($this->errors as $error) {
			foreach($error as $item)
			{
				$errors .= "<li>".$item."</li>";
			}
		}
		$errors .= "</ul>";
		$_SESSION['errors'] = $errors;
	}
	// Красивый вывод ошибок валидации


    public function loaduser($table,$iduser) {
        return R::load($table, $iduser);
    }

    public function checkbalance($table) {
        $balnow = R::load($table, $_SESSION['ulogin']['id']);
        return $balnow['balance'];
    }

    public function allcontact($iduser) {
        $mass = R::find("contact", "WHERE users_id = ?", [$iduser]);
        return $mass;
    }

    public function allresult($iduser) {
        $mass = R::find("result", "WHERE users_id = ?", [$iduser]);
        return $mass;
    }





    public function online (){

        if ($_SESSION['ulogin']) $user = $_SESSION['ulogin']['username'];
        else $user = "guest";

        if ($user == "guest")  $online = R::findOne("online", "WHERE ip = ?", [$_SERVER['REMOTE_ADDR']]);



    }




	//ОТПРАВКА E - MAIL
}
?>