<?php

	$servidor = "localhost";
	$usuario = "";
	$senha = "";
	$banco = "Agenda";

	$conect = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	if (!$conect) {
		die("Falha na conexão: " . mysqli_connect_error());
	}
	echo "Sucesso na conexão";
	
?>
