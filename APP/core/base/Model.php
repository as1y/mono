<?php
namespace APP\core\base;
use RedBeanPHP\R;

abstract class Model
{
	public $ATR = [];
	public $errors = [];
	public $rules = [];
    public $user = [];

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



    public function addbalanceuser($user, $summa, $comment = ""){

        $user->bal = $user->bal + $summa;
        R::store($user);

        //Зачислить в баланслог
        $balancelog = [
            'users_id' => $user['id'],
            'date' => date("Y-m-d H:i:s"),
            'sum' => $summa,
            'comment' => $comment,
            'type' => "debet",
        ];
        $this->addnewBD("balancelog", $balancelog);
        //Зачислить в баланслог

        return true;
    }


    public function spisaniebalanceuser($user, $summa, $comment = ""){

        $user->bal = $user->bal - $summa;
        R::store($user);

        //Зачислить в баланслог
        $balancelog = [
            'users_id' => $user['id'],
            'date' => date("Y-m-d H:i:s"),
            'sum' => $summa,
            'comment' => $comment,
            'type' => "credit",
        ];
        $this->addnewBD("balancelog", $balancelog);
        //Зачислить в баланслог

        return true;
    }


    public static function contact($id, $type = "company") {

	    if ($type == "company") $mass = R::findAll("contact", "WHERE company_id = ?", [$id]);
        if ($type == "user") $mass = R::findAll("contact", "WHERE user_id = ?", [$id]);


        $contact['all'] = '0';
        $contact['free'] = '0';
        $contact['ready'] = '0';
        $contact['perezvon'] = '0';
        $contact['otkaz'] = '0';
        $contact['bezdostupa'] = '0';
        $contact['today'] = '0';
        foreach ($mass as  $val) {
            $contact['all']++;
            if ($val['status'] == 0 ) $contact['free']++;
            if ($val['status'] != 0 ) $contact['ready']++;
            if ($val['status'] == 2 ) $contact['perezvon']++;
            if ($val['status'] == 3 ) $contact['otkaz']++;
            if ($val['status'] == 4 ) $contact['bezdostupa']++;
            if ($val['datacall'] == date("Y-m-d") ) $contact['today']++;
        }
        return $contact;

    }
    public static function getres($id, $type = "company") {


        if ($type == "company")  $mass = R::findAll("result", "WHERE company_id = ?", [$id]);
        if ($type == "user")  $mass = R::findAll("result", "WHERE users_id = ?", [$id]);



        $result['all'] = '0';
        $result['moderation'] = '0';
        $result['today'] = '0';
        foreach ($mass as $val) {
            if ($val['status'] == 1 ) $result['all']++;
            if ($val['status'] == 0 ) $result['moderation']++;
            if ($val['date'] == date("Y-m-d") and $val['status'] == 1  ) $result['today']++;
        }
        return $result;
    }






    public function resiz2($url){

        $w = 600;

        $src = imagecreatefromjpeg($url);
        $w_src = imagesx($src);
        $h_src = imagesy($src);


        // создаём пустую квадратную картинку
        // важно именно truecolor!, иначе будем иметь 8-битный результат
        $dest = imagecreatetruecolor($w,$w);

        // вырезаем квадратную серединку по x, если фото горизонтальное
        if ($w_src > $h_src) {

            imagecopyresized($dest, $src, 0, 0,
                round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                0, $w, $w, min($w_src,$h_src), min($w_src,$h_src));

        }

        // вырезаем квадратную верхушку по y,
        // если фото вертикальное (хотя можно тоже серединку)
        if ($w_src < $h_src)
            /*
                   imagecopyresized($dest, $src, 0, 0, 0,
                round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                $w, $w, min($w_src,$h_src), min($w_src,$h_src));
*/
            imagecopyresized($dest, $src, 0, 0, 0, 0, $w, $w,
                min($w_src,$h_src), min($w_src,$h_src));


        // квадратная картинка масштабируется без вырезок
        if ($w_src==$h_src)
            imagecopyresized($dest, $src, 0, 0, 0, 0, $w, $w, $w_src, $w_src);



// Подгоняем под 300 на 300
        $image_p = imagecreatetruecolor(300, 200); // Создаем изображение
        imagecopyresampled($image_p, $dest, 0, 0, 0, 0, 300, 300, $w, $w);
// Подгоняем под 300 на 300


// Сохраняем
        imagejpeg ($image_p ,$url, 100); // Сохраняем
// Сохраняем


    }




    public function resizepicture($url){

        $w = 600;

        $src = imagecreatefromjpeg($url);
        $w_src = imagesx($src);
        $h_src = imagesy($src);


        // создаём пустую квадратную картинку
        // важно именно truecolor!, иначе будем иметь 8-битный результат
        $dest = imagecreatetruecolor($w,$w);

        // вырезаем квадратную серединку по x, если фото горизонтальное
        if ($w_src > $h_src) {

            imagecopyresized($dest, $src, 0, 0,
                round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                0, $w, $w, min($w_src,$h_src), min($w_src,$h_src));

        }

        // вырезаем квадратную верхушку по y,
        // если фото вертикальное (хотя можно тоже серединку)
        if ($w_src < $h_src)
            /*
                   imagecopyresized($dest, $src, 0, 0, 0,
                round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                $w, $w, min($w_src,$h_src), min($w_src,$h_src));
*/
            imagecopyresized($dest, $src, 0, 0, 0, 0, $w, $w,
                min($w_src,$h_src), min($w_src,$h_src));


        // квадратная картинка масштабируется без вырезок
        if ($w_src==$h_src)
            imagecopyresized($dest, $src, 0, 0, 0, 0, $w, $w, $w_src, $w_src);



// Подгоняем под 300 на 300
        $image_p = imagecreatetruecolor(300, 300); // Создаем изображение
        imagecopyresampled($image_p, $dest, 0, 0, 0, 0, 300, 300, $w, $w);
// Подгоняем под 300 на 300


// Сохраняем
        imagejpeg ($image_p ,$url, 100); // Сохраняем
// Сохраняем


    }



    public function  changeavatar ($url){
        $user = R::load("users", $_SESSION['ulogin']['id']);
        $user->avatar = $url;
        R::store($user);
        return true;
    }


    public function  changelogo ($url, $idc){

        $company = R::load("company", $idc);

        $company->logo = $url;
        R::store($company);
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


    public static function countnewmessages(){
        return  R::count('dialog', "WHERE uvedomlenie =?", [$_SESSION['ulogin']['id']]);
    }



    public static function countoperator(){
        return  R::count('users', "WHERE role=?", ["O"]);
    }


	//ОТПРАВКА E - MAIL
}
?>