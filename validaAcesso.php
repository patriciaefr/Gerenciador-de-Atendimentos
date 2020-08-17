<?php
	include "conexao.php";

	session_start();

	$nomeusuario = $_POST['nomeusuario'];
	$senha = $_POST['senha'];

	$resultG = mysqli_query($conect,"SELECT G.nomeusuario,G.senha FROM Gerente as G WHERE G.nomeusuario = '$nomeusuario' AND G.senha = '$senha'");
	$resultA = mysqli_query($conect,"SELECT A.nomeusuario,A.senha FROM Analista as A WHERE A.nomeusuario = '$nomeusuario' AND A.senha = '$senha'");
	$resultR = mysqli_query($conect,"SELECT R.nomeusuario,R.senha FROM Recepcionista as R WHERE R.nomeusuario = '$nomeusuario' AND R.senha = '$senha'");


	if(mysqli_num_rows ($resultG) > 0 ){
		$_SESSION['nomeusuario'] = $nomeusuario;
		$_SESSION['senha'] = $senha;
		header('location:areaGerente.php');
	}else{
		if(mysqli_num_rows ($resultA) > 0 ){
			$_SESSION['nomeusuario'] = $nomeusuario;
			$_SESSION['senha'] = $senha;
			header('location:areaAnalista.php');
		}
		else{
			if(mysqli_num_rows ($resultR) > 0 ){
				$_SESSION['nomeusuario'] = $nomeusuario;
				$_SESSION['senha'] = $senha;
				header('location:areaRecepcionista.php');
			}
			else{
				unset ($_SESSION['nomeusuario']);
				unset ($_SESSION['senha']);
				header('location:index.php');
			}
		}
		
	}
?>
