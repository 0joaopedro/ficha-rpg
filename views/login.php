<?php 
include_once('head.php');
include_once('navbar.php');

?>
<section id="page_login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 well">
						<h1>Ficha para o D&D 5.0</h1>
					<form action="" name="f1" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" id="username" class="form-control">
						</div><br/>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" class="form-control">
						</div><br/>
						<div class="input-group">
							<button type="button" class="btn btn-default" id="login">Entrar</button>
						</div>
						Usuário de teste: professor <br>
						Senha: prof
					</form>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="message">
				
					</div>
				</div>

		</div>
	</div>
</section>
