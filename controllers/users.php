<?php
locked();
include_once('models/users.php');

//Mostra a lista de usuários
	$qtdUser = 5;
	$totalResultado  = count_users($cnx);

	// The ceil function will round floats up.
	$numberoDePaginas = ceil($totalResultado / $qtdUser);

	// Check if we have a page number in the _GET parameters
	if(!empty($_GET) && isset($_GET['page'])){
	    $page = (int)$_GET['page'];
	}else{
	    $page = 1;
	}

	// Check that the page is within our bounds
	if($page < 0){
	    $page = 1;
	}elseif($page > $numberoDePaginas){
	    $page = $numberoDePaginas;
	}

	$users = get_users_paging($cnx,$page,$qtdUser);
	include('views/list_users.php');
