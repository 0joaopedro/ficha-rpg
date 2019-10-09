<?php

if (isset($_GET['controller']) ) {	
	include_once('cnx.php');
	session_start();
	include_once('lib/helper.php');	
	require_once('controllers/'.$_GET['controller'].".php");
	// Fechar a conexão
	pg_close($cnx);	
	
}else{
	require_once('controllers/login.php');		
}

?>
