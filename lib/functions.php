<?php
// ВЫКЛЮЧАТЬ ОШИБКИ
$er = ERRORS;
if($er == 1){
	//ВЫВОД ОШИБОК
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	//ВЫВОД ОШИБОК
} else{
	error_reporting(E_ERROR);
}
function not_found() { // ЕСЛИ НЕ НАЙДЕНА СТРАНЦИА


	if (isset($_SESSION['ulogin'])){
		echo "<script>document.location.href='/panel';</script>\n";
		exit();
	}
	else{
		http_response_code(404);
		include ("404.php");
		exit();
	}
} // ЕСЛИ НЕ НАЙДЕНА СТРАНЦИА


// Функция вывода сообщений в обработчике форм
function message( $text ) {
	exit('{ "message" : "'.$text.'"}');
}
// Функция вывода сообщений в обработчике форм
// Функция редирект при возвращении из формы через ajax
function go( $url ) {
	exit('{ "go" : "'.$url.'"}');
}
// Функция редирект при возвращении из формы через ajax



function redir($http = FALSE){
	if($http){
		$redirect = $http;
	}else{
		$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
	}
	header("Location: $redirect");
	exit();
}
// Екзит из интерфейса


// СООБЩЕНИЕ ЧЕРЕЗ PHP
function mes ( $mess ) {
	echo ( '
	<script>
		alert(" '.$mess. '");
	</script>
		 ') ;
}
// СООБЩЕНИЕ ЧЕРЕЗ PHP
function dumpf($PARAM){
	file_put_contents($_SERVER["DOCUMENT_ROOT"] .'/log.log', var_export($PARAM, true), FILE_APPEND);
}


function hurl($url){
	$url = str_replace("http://", "", $url); // Убираем http
	$url = str_replace("https://", "", $url); // Убираем https
	$url = str_replace("www.", "", $url); // Убираем https
	return $url;
}
// Генерируем рандом символы 30 шт
function random_str( $num = 30 ) {
	return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}
// Генерируем рандом символы 30 шт
function show($par){
	echo "<pre>";
	print_r($par);
	echo "</pre>";
}
// ФУНКЦИЯ ЗАГРУЗКИ КЛАССОВ
spl_autoload_register(function ($class) {
		$path = str_replace( '\\', '/', $class.'.php' );
		if (file_exists($path)){
			require $path;
		}
	});
// ФУНКЦИЯ ЗАГРУЗКИ КЛАССОВ
function h($str){
	return htmlspecialchars($str, ENT_QUOTES);
}

/**
 * Выводит ошибку в специальном формате
 * @param string $error_message
 */
function e(string $error_message): void
{
    if(ERRORS) {
        ob_clean();
        ob_start();
        echo(sprintf('<h1 style="color:red">%s</h1>', $error_message));
        echo('<pre>' . print_r(debug_backtrace(), true) . '</pre>');
        ob_end_flush();
        exit();
    }
}


function skorogovorka(){

    $chislo = rand(1,3);


    ?>

        <?php if ($chislo == 1):?>
        <p class="text-muted">Расскажите про покупки! — Про какие про покупки?
            Про покупки, про покупки, про покупочки свои.</p>
        <?php endif;?>

    <?php if ($chislo == 2):?>
        <p class="text-muted">Ядро потребителей пиастров — пираты, а пиратов — пираньи.</p>
    <?php endif;?>

    <?php if ($chislo == 3):?>
        <p class="text-muted">На дворе — трава, на траве — дрова. Не руби дрова на траве двора!</p>
    <?php endif;?>



    <?php





}

function translit_sef($value)
{
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
    );

    $value = mb_strtolower($value);
    $value = strtr($value, $converter);
    $value = mb_ereg_replace('[^-0-9a-z]', '_', $value);
    $value = mb_ereg_replace('[-]+', '_', $value);
    $value = trim($value, '_');

    $value = str_replace("-", "_", $value); //Убираем тире, чтобы использовать его для IDшника


    return $value;
}

function generatepayform($form){

    echo '<form method="post" action="'.$form['action'].'">
    ';

    foreach ($form['input'] as $key=>$val) {
        ?>
        <input type="<?= $val['type'] ?>" name="<?= $val['name'] ?>" value="<?= $val['value'] ?>">
        <?php
    }

    echo "</form>";

}


function teleph($tel){
	$tel = str_replace("'", "", $tel); // Убираем +
	$tel = str_replace("+", "", $tel); // Убираем +
	$tel = str_replace("(", "", $tel); // Убираем (
	$tel = str_replace(")", "", $tel); // Убираем )
	$tel = str_replace("-", "", $tel); // Убираем )
	$tel = str_replace(".", "", $tel); // Убираем .
	$tel = str_replace(" ", "", $tel); // Убираем пробелы
	$tel = trim($tel);
	if ($tel['0'] == '8'){
		$tel = substr($tel, 1);
	}
	if ($tel['0'] != '7') $tel = "7".$tel."";
	return $tel;
}



function getconversion ($value1, $value2){
    if ($value2 == 0) return 0;
    $result = $value1/$value2*100;
    $result = round($result);
    return $result;
}



function getsizetypeimage($w_src, $h_src){

    if ($w_src > $h_src)  return  "horizont";
  if ($w_src < $h_src)  return "vertikal";
  if ($w_src == $h_src)  return"kvadrat";




}

function fCURL($url, $PARAMS = []){

    $ch = curl_init();

    if (!empty($PARAMS['GET'])){
        $url = $url."?".http_build_query($PARAMS['GET']);
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);



    //  curl_setopt($ch, CURLOPT_COOKIE, session_name() . '=' . session_id());
    curl_setopt($ch, CURLOPT_COOKIEFILE, $_SERVER['DOCUMENT_ROOT'].'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, $_SERVER['DOCUMENT_ROOT'].'/cookie.txt');


    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json-patch+json'));
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);


    if (!empty($PARAMS['POST'])){
        $PARAMS['POST'] = json_encode($PARAMS['POST']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $PARAMS['POST']);
    }

    if (!empty($PARAMS['PATCH'])){
        $PARAMS['PATCH'] = json_encode($PARAMS['PATCH']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $PARAMS['PATCH']);
    }



    if (!empty($PARAMS['DELETE'])){
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $PARAMS['DELETE']);
    }





    $result = curl_exec($ch);

    curl_close($ch);

    //  $resultJson = $result;
    $resultJson = json_decode($result, TRUE);


    return $resultJson;



}



function validationpay($data, $type){

    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    if ($type == "qiwi"){
        $data = intval($data);
        if (strlen($data) > 12) return "Qiwi кошелек не должен быть длиннее 10 символов";
        if (strlen($data) < 5) return "Qiwi кошелек не должен быть длиннее 5 символов";
    }


    if ($type == "yamoney"){
        $data = intval($data);
        if (strlen($data) > 30) return "Яндекс.Деньги не должен быть длиннее 30 символов";
        if (strlen($data) < 5) return "Яндекс.Деньги  не должен быть длиннее 5 символов";
    }

    if ($type == "card"){
        $data = intval($data);
        if (strlen($data) > 30) return "Номер карты не должен быть длиннее 30 символов";
        if (strlen($data) < 5) return "Номер карты  не должен быть длиннее 5 символов";
    }




    return true;
}




?>