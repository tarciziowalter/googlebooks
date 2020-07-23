<?php

namespace Application\Core;

class App
{
	
	public function index(){
		$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';
		$url = ucfirst($url);
		$url.="Controller";
		if(file_exists("Application/Controllers/".$url.'.php')){
			$className = 'Application\\Controllers\\'.$url;
			$controller = new $className;
			$controller->index();
		}else{
			die("Não existe este controlador!");
		}

	}
}

?>