<?php

namespace Application\Core;

class Router 
{
	
	public static function get($path,$arg){

		$url = @$_GET['url'];

		if($url == $path){
			$arg();
			die();
		}

		$path = explode('/', $path);
		$url = explode('/', @$_GET['url']);
		$proceed = true;
		$param = [];

		if(count($path) == count($url)){

			foreach ($path as $key => $value) {
				if($value == '?'){
					$param[$key] = $url[$key];
				}else if($url[$key] != $value){
					$proceed = false;
					break;
				}
			}

			if($proceed){
				$arg($param);
				exit();
			}
		}
	}
}


?>