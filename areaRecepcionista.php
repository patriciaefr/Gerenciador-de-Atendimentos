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
				<h1>Área Recepcionista</h1>
	    		<br />
				<form method="post" action="" id="formAtendimento">
				<h3>Atendimento:</h3>
					<div class="form-group">
						<label for="nome">Nome cliente</label>
						<input type="text" class="form-control" id="nomecliente" name="nomecliente" placeholder="Nome" required="requiored">
					</div>
					
					<div class="form-group">
						<label for="nome">Documento</label>
						<input type="text" class="form-control" id="doccliente" name="doccliente" placeholder="Documento" required="requiored">
					</div>
					<div class="dropdown">
						<div class="form-group">
							<label for="nome">Área atendimento</label>
							<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Selecione a área do atendimento <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Informática</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Contabilidade</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tributária</a></li>
							</ul>
						</div>
					</div>
					<div class="dropdown">
						<div class="form-group">
							<label for="nome">Analista disponível da área</label>
							<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Selecione um analista dispoível <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">José Sousa</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Maria Costa</a></li>
							</ul>
						</div>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="">
						<label class="form-check-label" for="exampleCheck1">Retorno</label>
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Registrar</button>
				</form>
			</div>
		</div>

			
        </div>

	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
