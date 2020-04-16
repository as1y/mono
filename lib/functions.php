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


// Функция редирект при возвращении из формы через ajax
function go2( $url ) {
	exit('
	<script>
	window.location.href="/" + "'.$url.'";
	</script>
	');
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
function off( $mes ) {
	echo ( '
	<div class="note note-danger">
    <h4 class="block">ВНИМАНИЕ!</h4>
 <p> '.$mes.' </p>
     </div>
		 ') ;
	exit;
}
// Функция красивого ексита
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
	file_put_contents('log.log', var_export($PARAM, true), FILE_APPEND);
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

    $chislo = rand(1,5);
    echo $chislo;
    ?>


    <blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
        <p class="mb-1">Расскажите про покупки! — Про какие про покупки?
            Про покупки, про покупки, про покупочки свои.</p>
    </blockquote>


<?php


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





?>