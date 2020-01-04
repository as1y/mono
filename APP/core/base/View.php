<?php
namespace APP\core\base;
class View {
	public $route = [];
	public $view;
	public $layaout;
	static $meta = ["title"=> CONFIG['NAME'], "desc"=> "", "keywords"=> ""];
	public function __construct($route, $layaout='', $view=''){
		$this->route = $route;
		if ($layaout === false){
			$this->layaout = false;
		} else{
			$this->layaout = $layaout ?: CONFIG['LAYOUT'];
		}
		$this->view = $view;
	}
	public function render($DATA, $return = false){
		if(is_array($DATA)) extract($DATA);
		$file_view = WWW."/APP/views/".$this->route['controller']."/".$this->view.".php";
		ob_start();
		if(is_file($file_view)){
			require $file_view;
		}else{
            if (ERRORS == 1) echo "<p><b>Не найден вид </b>$file_view</p>";
		}
		$content = ob_get_clean();

		if (false !== $this->layaout){
		    $file_layaout = WWW."/APP/views/layaouts/".$this->layaout.".php";
			if(is_file($file_layaout)){
			    if(!$return){
                    require $file_layaout;
                }else{
			        ob_start();
                    require $file_layaout;
			        return ob_get_clean();
                }
			}else{

			    if (ERRORS == 1) echo "<p><b>Не найден ШАБЛОН ".$this->layaout."</b></p>";


			}
		}
	}
	public static function getMeta(){
		echo '<title>'.self::$meta['title'].'</title>
			<meta name="description" content="'.self::$meta['desc'].'" />
			<meta name="keywords" content="'.self::$meta['keywords'].'" />';
	}
	public static function setMeta($title = "", $desc ="", $keywords=""){
		self::$meta['title'] = $title;
		self::$meta['desc'] = $desc;
		self::$meta['keywords'] = $keywords;
	}
}
?>