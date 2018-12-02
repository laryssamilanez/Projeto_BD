<?php
	include ("conexao.php");
	$reccodigo=$_GET["codigoexc"];
	#CONSULTA RECEBE UMA STRING, QUE SERA LANÇADA AO BANCO DE DADOS.
	$consulta = "DELETE FROM item WHERE (codigo = {$_GET["codigoexc"]})";
	
	#SE A CONSULTA FOR UM SUCESSO
	if (mysqli_query($conexao, $consulta)){
		echo "Sucesso!";
		header('Location: lista_itens.php');
		exit();
	#SE A CONSULTA FOR FALHA
	} else {
		echo "Falha!";
		header('Location: lista_itens.php');
		exit();
	}
?>

