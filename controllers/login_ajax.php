<?php
	$message_ok=false;
	$message_error='O sistema não esta disponivel';
	if(isset($_POST['username'],$_POST['password'])){
		if($_POST['username']!=""){
			if($_POST['password']!=""){
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$res=pg_query($cnx,("Select * from usuario where nomusu='$username' and senusu='$password'"));
				if(pg_num_rows($res)>0){
					$message_ok=true;
					$user_list=pg_fetch_array($res);
					$_SESSION['id']=$user_list[0];
					$_SESSION['username']=$user_list[1];
					$message_error='Logado';
				}else{
					$message_error='O login falhou, verifique seus dados novamente.';
				}
			}else{
				$message_error='Senha Incorreta.';
			}
		}else{
			$message_error='Nome de usuário não existe.';
		}
	}else{
		$message_error='Todos os campos são necessários.';
	}
	$json=array('data' => $message_ok, 'message' =>$message_error);
	echo json_encode($json);
?>
