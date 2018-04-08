<?php

/**
* Apps Config....
*/ 
class appsConfig 
{
	
	//const URL = "http://localhost/meghlab";

	const URL = "http://madventurebd.com";
	public static $pagetitle;

	public static function URL($url){
		echo self::URL.$url;
	}

	public static function Link($url){
		return self::URL.$url;
	}

	public function loadPageTitle(){
		if(isset($_GET['page'])){
			$url = $_GET['page'];
			$url = rtrim($url,"/");
			$url = explode("/", $url);
			//self::$pagetitle = $url[0];
			if($url[0] = str_replace("_", " ", $url[0])){
				self::$pagetitle = $url[0];
			}
		}
		else{
			self::$pagetitle = "home Page";
		}
	}


	public static function renderBody()
	{
		if(isset($_GET['page'])){
			$url = $_GET['page'];
			$url = rtrim($url,"/");
			$url = explode("/", $url);
			if(file_exists('apps/public/'.$url[0].'.php')){
				require_once 'apps/public/'.$url[0].'.php';
			}
			else{
				require_once 'apps/public/404.php';
			}

		}
		else{
			require_once 'apps/public/home.php';
		}

	}

	public function loadLibaryClass()
	{
		 spl_autoload_register(function($className){
			if(file_exists('systems/libs/'.$className.'.php')){
				include_once 'systems/libs/'.$className.'.php';
			}
			else{
				echo "<pre>Class  not Exit</pre>";
			}
			
		});
	}
	
}


?>