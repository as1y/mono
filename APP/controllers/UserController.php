<?php
namespace APP\controllers;
use APP\core\Mail;
use APP\models\User;
class UserController extends AppController
{
	public $layaout = 'USER'; //Перераспределяем массив layaout


	public function registerAction()
	{
		if( isset($_SESSION['ulogin']['id']) ) redir('/panel/');


		if(!empty($_POST))
		{
			$user = new User; //Вызываем Моудль
			$user->load($_POST); // Берем из POST только те параметры которые нам нужны
			if(!$user->validate($_POST) || !$user->checkUniq(CONFIG['USERTABLE']) )
			{
				$_SESSION['form_data'] = $user->ATR; //Сохраняем в сессию, чтобы у поьзователю было удобнее
				$user->getErrorsVali(); //Записываем ошибки в сессию
				redir();
			}
			else
			{

			    //Прошли Валидацию

			    $passorig = $user->ATR['signup-password'];
				$user->ATR['signup-password'] = password_hash($user->ATR['signup-password'], PASSWORD_DEFAULT); // Хеш пароля
				$_SESSION['confirm'] = $user->ATR; //Базовые параметры
				//Доп. Параметры в сессию
				$_SESSION['confirm']['code'] = $code = random_str(5); //Код подтверждения
				if(isset($_COOKIE['ref'])) $_SESSION['confirm']['ref'] = $_COOKIE['ref']; //ID реферала
				//Доп. Параметры в сессию

                // Отправка на почту кода подтверждения
                Mail::sendMail("code",'Успешная регистрация '.CONFIG['NAME'],null,['to' => [['email' =>$user->ATR['signup-email']]]]);

                //  mes ('ВНИМАНИЕ! Не закрывайте страницу браузера. Код подтверждения отправлен на почту. ');

				redir('/user/confirmRegister/');
			}// ИДЕМ НА КОНФИРМ
		}
	}



	public function indexAction()
	{

	    //Если юзер залогинен, то редиректим его на панель
		if( isset($_SESSION['ulogin']['id']) ) redir('/panel/');


		if(!empty($_POST)){
			$user = new User;

			if($user->login(CONFIG['USERTABLE']
            )){
				//АВТОРИЗАЦИЯ
				redir('/panel/');
				//АВТОРИЗАЦИЯ
			}
			else
			{
				$_SESSION['errors'] = "Логин/Пароль введены не верно";
			}
		}
	}


	public function logoutAction()
	{
		if(isset($_SESSION['ulogin'])){
			$_SESSION['ulogin'] = array();
			redir('/user/login');
		}
	}




	public function confirmRegisterAction()
	{
		$user = new User;




		if( !isset($_SESSION['confirm']['code']) )
		{
			mes ('Код подтверждения устарел. Необходимо зарегистрироваться повторно.');
			redir('/user/register/');
		}


		//Проверка на сессию кода
		if(!empty($_POST['confirm-code']))
		{
			if($_POST['confirm-code'] == $_SESSION['confirm']['code'])
			{
				// ПИШЕМ В БАЗУ ДАННЫХ
				if($user->saveuser(CONFIG['USERTABLE']))
				{
                    Mail::sendMail("register",'Успешная регистрация '.CONFIG['NAME'],null,['to' => [['email' =>$_SESSION['confirm']['signup-email']]]]);

                    $_SESSION = array();
					mes ('Успешная регистрация! Данные для входа отправленны на почту!');
					redir('/user/');
				}
				else
				{
					$_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
				}
				// ПИШЕМ В БАЗУ ДАННЫХ
			}
			else
			{
				$_SESSION['errors'] = "Код не совпдает с кодом в E-mail";
			}
		}
	}


	public function recoveryAction()
	{
		if(!empty($_POST)){
			$user = new User;
			if(filter_var($_POST['reminder-email'], FILTER_VALIDATE_EMAIL)){
				if($user->checkemail('client', $_POST['reminder-email'])){
					$_SESSION['confirm']['recode'] = random_str(5);
					$_SESSION['confirm']['remail'] = $_POST['reminder-email'];
                    Mail::sendMail("resetpassword",' Сборс пароля в '.CONFIG['NAME'],null,['to' => [['email' =>$_POST['reminder-email']]]]);
					mes ('ВНИМАНИЕ! Не закрывайте страницу браузера. Код для сброса пароля отправлен на почту. ');
					go2('user/confirmRecovery/');
				}
				else
				{
					$_SESSION['errors'] = "Пользователя с таким E-mail не существует";
				}
			}
			else
			{
				$_SESSION['errors'] = "E-mail указан не корректно";
			}
		}
	}
	// Страница ввода кода при сбросе пароля
	public function confirmRecoveryAction()
	{
		if( !isset($_SESSION['confirm']['recode']) )
		{
			mes ('Код подтверждения устарел. Необходимо выполнить процедуру повторно.');
			redir('/user/recovery/');
		}
		if(!empty($_POST['confirm-code']))
		{
			if($_POST['confirm-code'] == $_SESSION['confirm']['recode'])
			{
				$user    = new User;
				$newpass = $user->newpass('client');
				if(!empty($newpass))
				{
					$_SESSION['confirm']['newpass'] = $newpass;
                    Mail::sendMail("newpass",  'Ваш новый пароль в '.CONFIG['NAME'],null,['to' => [['email' =>$_SESSION['confirm']['remail']]]]);
					$_SESSION = array();
					mes ('Новый пароль отправлен на почту!');
					redir('/user/');
				}
				else
				{
					$_SESSION['errors'] = "Ошибка базы данных. Попробуйте позже.";
				}
			}
			else
			{
				$_SESSION['errors'] = "Код не совпдает с кодом в E-mail";
			}
		}
	}
	// Страница ввода кода при сбросе пароля
	public function refAction()
	{
		if(!empty($_GET['partner']))
		{
			if( !preg_match('/^[0-9]{1,5}$/', $_GET['partner']) )  exit('Неправильная реф.ссылка');
			setcookie('ref', $_GET['partner'], strtotime('+15 days'), '/');
			redir("/");
    //			header('Location: /');
		}
		else
		{
			exit ('Неправильная реф.ссылка');
		}
	}
	public function formAction()
	{
		if(!empty($_POST)){
			$_SESSION['form_data']['signup-email'] = $_POST['email'];
			$_SESSION['form_data']['signup-telephone'] = $_POST['telephone'];
			$_SESSION['form_data']['signup-username'] = $_POST['username'];
			redir('/user/register/');
		}
		exit();
	}
}
?>