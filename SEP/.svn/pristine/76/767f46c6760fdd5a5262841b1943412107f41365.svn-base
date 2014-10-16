<?php
Bd_Init::init();
#	print_r($GLOBALS);
	$webPath = ROOT_PATH."/php/phplib/pcheck/web/";
	$action = $_GET['action'];
	if( empty($action) ){
		if( empty($_POST['action']) ){
			$action = "index.php";
		}else{
			$action = $_POST['action'];
		}
	}
	if( FALSE == preg_match("/.php$/",$action) ){
		$action .= ".php";
	}
	include($webPath."/".$action);

?>
