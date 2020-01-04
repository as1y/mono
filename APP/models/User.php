<?php
namespace APP\models;
use RedBeanPHP\R;

class User extends \APP\core\base\Model
{
	// АТРИБУТЫ КОТОРЫЕ ЗАБИРАЕМ ПРИ РЕГИСТРАЦИИ
	public $ATR = [
	'signup-username' => '',
	'signup-email' => '',
	'signup-password' => '',
	'signup-password-confirm' => '',
	];
	// Правила валидации
	public $rules = [
	'required' => [
	['signup-username'],
	['signup-email'],
	['signup-password'],
	['signup-password-confirm'],
	],
	'email' =>[
	['signup-email'],
	],
	'lengthMin' =>[
	['signup-password',5],
	['signup-password-confirm',5],
	],
	'lengthMax' =>[
	['signup-password',30],
	['signup-password-confirm',30],
	['signup-username',30],
	],
	'equals' =>[
	['signup-password', 'signup-password-confirm' ],
	],
	];
	// Валидация на код
	public $rulesconfirm = [
	'required' =>[
	['confirm-code'],
	],
	'lengthMax' =>[
	['confirm-code',6],
	],
	];
	// ПРОВЕРКА НА УНИКАЛЬНЫЙ ЕМЕЙЛ
	public function checkUniq($table)
	{
		$uni = R::findOne($table, 'email = ? LIMIT 1',[$this->ATR['signup-email']]);
		if($uni){
			if($uni->email == $this->ATR['signup-email']){
				$this->errors['uniq'][] = "Пользователь с таким E-mail уже зарегистрирован";
			}
			return false;
		}
		return true;
	}
	// ПРОВЕРКА НА УНИКАЛЬНЫЙ ЕМЕЙЛ
	//СБРОС ПАРОЛЯ
	public function newpass($table)
	{
		$newpass = random_str(10);
		$tbl = R::load($table, $_SESSION['confirm']['id']);
		$tbl->pass = password_hash($newpass , PASSWORD_DEFAULT);
		R::store($tbl);
		return $newpass;
	}
	//СБРОС ПАРОЛЯ
	//ЛОГИН
	public function login($table)
	{
		/*
	//ДЛЯ ТЕСТА
	$email = !empty(trim($_POST['login-email'])) ? trim($_POST['login-email']) : NULL;
	$user = R::findOne($table, 'email = ? LIMIT 1',[$email]);
								foreach ($user as $k => $v){
								$_SESSION['ulogin'][$k] = $v;
								$_SESSION['ulogin']['pass'] = "";
							}
			return true;
	//ДЛЯ ТЕСТА
*/


		$email = !empty(trim($_POST['login-email'])) ? trim($_POST['login-email']) : NULL;
		$pass = !empty(trim($_POST['login-password'])) ? trim($_POST['login-password']) : NULL;


		if ($email && $pass){
			$user = R::findOne($table, 'email = ? LIMIT 1',[$email]);
			if($user){
				if(password_verify($pass, $user->pass)){
					// АВТОРИЗАЦИЯ
					foreach ($user as $k => $v){
						$_SESSION['ulogin'][$k] = $v;
						$_SESSION['ulogin']['pass'] = "";
					}
					// АВТОРИЗАЦИЯ
					return true;
				}
			}
		}
		return false;
	}
	//ЛОГИН
	// SAVEUSER


	public function saveuser($table)
	{
		$tbl = R::dispense($table);

        //Проверяем рефку
		if(empty($_SESSION['confirm']['ref'])) $_SESSION['confirm']['ref'] = NULL;


		//ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
		$MASSREG = [
		'username' => $_SESSION['confirm']['signup-username'],
		'email' => $_SESSION['confirm']['signup-email'],
		'pass' => $_SESSION['confirm']['signup-password'],
		'ref' => $_SESSION['confirm']['ref'],
		'datareg' => date("Y-m-d H:i:s"),
		];
		//ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
		foreach($MASSREG as $name=>$value)
		{
			$tbl->$name = $value;
		}
		return R::store($tbl);
	}
	// SAVEUSER
	// ПРОВЕРКА ЕСТЬ ЛИ ТАКОЙ ЕМЕЙЛ
	public function checkemail($table, $email)
	{
		$uni = $this->findOne($table, 'email = ? LIMIT 1', [$email]);
		if($uni){
			if($uni->email == $email){
				$_SESSION['confirm']['id'] = $uni->id;
				return true;
			}
		}
		return false;
	}
	// ПРОВЕРКА ЕСТЬ ЛИ ТАКОЙ ЕМЕЙЛ
}
?>