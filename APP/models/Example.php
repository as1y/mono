<?php
namespace APP\models;
use RedBeanPHP\R;

class Add extends \APP\core\base\Model
{
	// АТРИБУТЫ КОТОРЫЕ ЗАБИРАЕМ ПРИ РЕГИСТРАЦИИ
	public $ATR = [
	'namecompany' => '',
	'transcript' => '',
	'region' => '',
	'email' => '',
	'urlsite' => '',
	'adress' => '',
	'about' => '',
	'category' => '',
	'product' => '',
	'daylimit' => '',
	'cpa' => '',
	'type' => '',
	'moder' => '',
	'timecall' => '',
	'PN' => '',
	'VT' => '',
	'SR' => '',
	'CHT' => '',
	'PT' => '',
	'SB' => '',
	'VS' => '',
	];
	// Правила валидации
	public $rules = [
	'required' => [
	['namecompany'],
	['transcript'],
	['region'],
	['urlsite'],
	['adress'],
	['about'],
	['category'],
	['product'],
	['daylimit'],
	['cpa'],
	['type'],
	['moder'],
	['timecall'],
	],
	'email' =>[
	['email'],
	],
	'lengthMax' =>[
	['namecompany',50],
	['transcript',50],
	['urlsite',500],
	['adress',500],
	['about',2000],
	['product', 2000],
	['daylimit', 10],
	['cpa', 10],
	['moder', 20],
	['timecall', 20],
	],
	];
	// SAVEUSER
	public function saveproject($table, $mass)
	{
		// ЗАПОЛНЯЕМ ТАБЛИЦУ
		$tbl = R::dispense($table);
		$mass['urlsite'] = hurl($mass['urlsite']);
		$mass['criteriy'] = '["Раскрывать клиента, задавать встречные вопросы"]';
		$mass['uvedomlenie'] = 'true';
		$cpaforoperator =  round( ($mass['cpa']/4));
		//ЗАПИСЬ ДНЕЙ НЕДЕЛИ
		if ($mass['PN'] == "on") $dni['PN'] = 'on';
		if ($mass['VT'] == "on") $dni['VT'] = 'on';
		if ($mass['SR'] == "on") $dni['SR'] = 'on';
		if ($mass['CHT'] == "on") $dni['CHT'] = 'on';
		if ($mass['PT'] == "on") $dni['PT'] = 'on';
		if ($mass['SB'] == "on") $dni['SB'] = 'on';
		if ($mass['VS'] == "on") $dni['VS'] = 'on';
		//ЗАПИСЬ ДНЕЙ НЕДЕЛИ
		$dni = json_encode($dni,JSON_UNESCAPED_UNICODE);
		//ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
		$MASSREG = [
		'client_id' => $_SESSION['ulogin']['id'],
		'status' => '2',
		'name' => $mass['namecompany'],
		'email' => $mass['email'],
		'transcript' => $mass['transcript'],
		'region' => $mass['region'],
		'site' => $mass['urlsite'],
		'criteriy' => $mass['criteriy'],
		'adress' => $mass['adress'],
		'information' => $mass['about'],
		'uvedomlenie' =>$mass['uvedomlenie'],
		'category' => $mass['category'],
		'product' => $mass['product'],
		'daylimit' => $mass['daylimit'],
		'cpa' => $cpaforoperator,
		'cfc' => $mass['cpa'],
		'type' => $mass['type'],
		'dni' => $dni,
		'moder' => $mass['moder'],
		'timecall' => $mass['timecall'],
		];
		//ФОРМИРУЕМ МАССИВ ДАННЫХ ДЛЯ РЕГИСТРАЦИИ
		foreach($MASSREG as $name=>$value){
			$tbl->$name = $value;
		}
		R::store($tbl);
		// ЗАПОЛНЯЕМ ТАБЛИЦУ
		//ДОБАВЛЯЕМ СКРИПТ РАЗГОВОРА
		$company_id = R::getInsertID();
		$tablescript = R::dispense('script');
		$tablescript->company_id = $company_id;
		$tablescript->text = "<p>ДОБАВЬТЕ ПОЖАЛУЙСТА СКРИПТ РАЗГОВОРА</p>";
		$tablescript->form = '[{"NAME":"ИМЯ","TYPE":1}]';
		R::store($tablescript);
		//ДОБАВЛЯЕМ СКРИПТ РАЗГОВОРА
		return true;
	}




    public function newpassword($table)
    {
        $tbl = R::load($table, $_SESSION['ulogin']['id']);
        $tbl->pass = password_hash($this->ATR['passwordnew'], PASSWORD_DEFAULT);
        return R::store($tbl);
    }
    public function chpass($table)
    {
        $user = R::findOne($table, 'id = ?',[$_SESSION['ulogin']['id']]);
        if(!password_verify($this->ATR['passwordold'], $user->pass)){
            $this->errors['uniq'][] = "Старый пароль указан не верно";
            return false;
        }
        return true ;
    }




}
?>