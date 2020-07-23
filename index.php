<?php 
	
	require "Application/init.php";
	require "Application/autoload.php";

	$app = new \Application\Core\App();
	$app->index();
?>