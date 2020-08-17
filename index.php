<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Agenda</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <img src="imagens/agenda.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
		</nav>
		<div class="container">
	    	<br />
	    	<div class="col-md-4">
				<h1>Seja Bem vindo!</h1>
				<h3>Faça login abaixo</h3>
	    		<br />
				<form method="post" action="validaAcesso.php" id="formLogin">
					<div class="form-group">
						<input type="text" class="form-control" id="nomeusuario" name="nomeusuario" placeholder="Usuário" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Entrar</button>
				</form>
			</div>
		</div>


	    </div>

	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
