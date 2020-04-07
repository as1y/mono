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
        if(!R::testConnection()){

            R::setup(CONFIG['db']['dsn'],CONFIG['db']['user'],CONFIG['db']['pass']);
            //  R::fancyDebug( TRUE );
            //  R::freeze(TRUE);

        }

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




    public function addnewBD($table, $DATA) {

        $tbl = R::dispense($table);
        //ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
        foreach($DATA as $name=>$value)
        {
            $tbl->$name = $value;
        }
        return R::store($tbl);

        // По поводу валидации

    }

    public function filevalidation($FILE){



        if ($_FILES['size'] > 3000000) {
            $this->errors[] = "Размер не должен превышать 3МБ";
            return false;
        }

        if ($_FILES['size'] < 50000) {
            $this->errors[] = "Размер не может быть меньше 50КБ";
            return false;
        }

        if ($_FILES['type'] != "application/octet-stream") {
            $this->errors[] = "Не корректный формат";
            return false;
        }


        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".js");
        foreach ($blacklist as $item) {
            if(preg_match("/$item\$/i", $_FILES['csv']['name'])) {
                $this->errors[] = "Не корректный формат";
                return false;
        }
        }

        if(!preg_match("/.csv\$/i", $_FILES['csv']['name'])) {
            $this->errors[] = "Не корректный формат";
            return false;
        }


	    return true;



    }


    public static function online (){

        if ($_SESSION['ulogin']) $user = $_SESSION['ulogin']['username'];
        else $user = "guest";


        if ($user != "guset"){
            $online = R::findOne("online", "WHERE user = ?", [$user]);
            if ($online){
                $online->timestamp = time();
                R::store($online);
                return true;
            }

        }

        if ($user == "guest"){
            $online = R::findOne("online", "WHERE ip = ?", [$_SERVER['REMOTE_ADDR']]);
            if ($online) {
                $online->timestamp = time();
                R::store($online);
                return true;
            }
        }

        $tbl = R::dispense("online");
        //ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
        $MASSREG = [
            'user' => $user,
            'ipu' => $_SERVER['REMOTE_ADDR'],
            'timestamp' => time(),
        ];
        //ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
        foreach($MASSREG as $name=>$value)
        {
            $tbl->$name = $value;
        }
        R::store($tbl);


        return true;




    }

    public static function countonline(){
	    return  R::count('online');
    }


	//ОТПРАВКА E - MAIL
}
?>