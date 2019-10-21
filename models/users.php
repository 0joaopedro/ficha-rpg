<?php
function count_users($cnx){
	// Pega o total de Resultados
	$result = pg_query($cnx, "SELECT count(*) FROM usuario where nomusu<>'admin'"); 
	return (int)pg_fetch_result($result, 0, 0);

}
function get_users_paging($cnx,$page,$qtdPorPagina) {
	$offset = ($page - 1) * $qtdPorPagina;

	$sql = "SELECT * from usuario where nomusu<>'admin' ORDER  BY nomusu LIMIT  $qtdPorPagina offset $offset";
	
	$result = pg_query($cnx,$sql);
	if (!$result) {
	    echo "Um Erro Aconteceu\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}

function get_users($cnx) {
	$result = pg_query($cnx, "SELECT * FROM usuario");
	if (!$result) {
	    echo "Um Erro Aconteceu\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}
?>
