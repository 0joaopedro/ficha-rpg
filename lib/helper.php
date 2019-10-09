<?php
function locked(){ 
	if(empty($_SESSION)) {
		header("Location: index.php");
		exit();
	}
}

	function verifica($login){
		$result = preg_replace('/[^[:alpha:]_]/', '',$login);

		return $result;
	}

?>
