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








    public function  changeavatar ($url){

        $user = R::load("users", $_SESSION['ulogin']['id']);
        $user->avatar = $url;
        R::store($user);
        return true;

    }


    public static function addnewBD($table, $DATA) {

        $tbl = R::dispense($table);
        //ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
        foreach($DATA as $name=>$value)
        {
            $tbl->$name = $value;
        }
        return R::store($tbl);

        // По поводу валидации

    }

    public function filevalidation($FILE, $PARAMS = []){



        if ($FILE['size'] > 3000000) {
            $this->errors[] = ['Файл' => "Размер не должен превышать 3МБ" ];
            return false;
        }

        if ($FILE['size'] < 100) {
            $this->errors[] = ['Файл' => "Размер не может быть меньше 100байт" ];
            return false;
        }

        if ($FILE['type'] != $PARAMS['type']) {
            $this->errors[] = ['Файл' => "Не корректный формат1" ];
            return false;
        }

//        show($PARAMS['ext']);

        // Проверка на допустимый формат
        $format = false;
        foreach ($PARAMS['ext'] as $item) {
            if(preg_match("/$item\$/i", $FILE['name']))  $format = true;
        }
        if ($format == false){
            $this->errors[] = ['Файл' => "Не корректный формат" ];
            return false;
        }
        // Проверка на допустимый формат









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


        $MASSREG = [
            'user' => $user,
            'ipu' => $_SERVER['REMOTE_ADDR'],
            'timestamp' => time(),
        ];


        self::addnewBD("online", $MASSREG);


        return true;




    }

    public static function countonline(){
	    return  R::count('online');
    }

    public static function countoperator(){
        return  R::count('online', "WHERE role=?", ["O"]);
    }


	//ОТПРАВКА E - MAIL
}
?>