<?php
namespace APP\models;
use RedBeanPHP\R;

class Bazaupload extends \APP\core\base\Model {

    // АТРИБУТЫ КОТОРЫЕ ЗАБИРАЕМ ПРИ ДОБАВЛЕНИИ
    public $ATR = [

        'bazaload' => '',
        'idc' => '',

    ];
    // Правила валидации
    public $rules = [
        'required' => [
            ['bazaload'],
            ['idc'],
        ],
        'email' =>[
            ['email'],
        ],

//        'lengthMin' =>[
//            ['signup-password',5],
//            ['signup-password-confirm',5],
//        ],
//        'lengthMax' =>[
//            ['signup-password',30],
//            ['signup-password-confirm',30],
//            ['signup-username',30],
//        ],

    ];




    public function bazaupl($DATA) {
        //ОПРЕДЕЛЯЕМ ПЕРЕМЕННЫЕ

        $SEL = $DATA['sel']; // Массив с выбраннами столбцами



        //ОПРЕДЕЛЯЕМ ПЕРЕМЕННЫЕ
        $filename = WWW."/".$DATA['bazaload']."";


        if (!file_exists($filename)) return false;


        // СПАРСИЛИ CSV В МАССИВ
        if (($fp = fopen($filename, "r")) !== FALSE) {
            while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
                $list[] = $data;
            }
            fclose($fp);
        }
        // СПАРСИЛИ CSV В МАССИВ
        // ИЩЕМ ЗНАЧЕНИЯ СТОЛБЦОВ В МАССИВАХ
        $telkey = array_search('tel', $SEL);
        $namekey = array_search('name', $SEL);
        $companykey = array_search('company', $SEL);
        $sitekey = array_search('site', $SEL);
        $commentkey = array_search('comment', $SEL);
        if (  $telkey === FALSE ) message('Определите колонку ТЕЛЕФОН');


        // ИЩЕМ ЗНАЧЕНИЯ СТОЛБЦОВ В МАССИВАХ
        // РАСКЛАДЫВАЕМ МАССИВ НА СТРОКИ
        $coun = 0;
        foreach ($list as $stroka) {
            $stroka[$telkey] = teleph($stroka[$telkey]);
            $dlinna = strlen($stroka[$telkey]);
            $tel = $stroka[$telkey];
            if ($stroka[$telkey] and $dlinna <= 11 ) {
                // ОБРАБАТЫВАЕТ ТОЛЬКО ЕСТЬ ТЕЛЕФОН
                $coun++;
                $name = $stroka[$namekey];
                $company = $stroka[$companykey];
                $site = $stroka[$sitekey];
                $comment = $stroka[$commentkey];
                $tell[] = $tel;
                if ( !$namekey and $namekey === FALSE ) $name = "-";
                if ( !$companykey and $companykey === FALSE ) $company = "-";
                if ( !$sitekey and $sitekey === FALSE ) $site = "#";
                if ( !$commentkey and $commentkey === FALSE ) $comment = "-";



                $MASSIV = [
                    'company_id' => $DATA['idc'],
                    'client_id' => $DATA['clientid'],
                    'status' => '0',
                    'tel' => $tel,
                ];

                $this->addnewBD("contact" ,$MASSIV);

//                R::exec("
//					INSERT INTO `contact` (`id`, `users_id`, `company_id`, `client_id`, `status`, `tel`, `name`, `company`, `site`, `comment`, `data`, `datacall`)
//					VALUES (NULL, '0', '".$POST['idc']."', '".$clientid."', '0', '".$tel."', '".$name."', '".$company."', '".$site."', '".$comment."', '', '');
//				");



                // ОБРАБАТЫВАЕТ ТОЛЬКО ЕСТЬ ТЕЛЕФОН
            }
        }


        // РАСКЛАДЫВАЕМ МАССИВ НА СТРОКИ
        redir("project/base/?id=".$POST['idc']);



    }








}
?>