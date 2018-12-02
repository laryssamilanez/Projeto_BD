<?php
	include("conexao.php");
	$rectipo=$_GET["ftipo"];
	$recvalor=$_GET["fvalor"];
	
	mysqli_query($conexao,"insert into item (tipo, valor) values ('$rectipo', '$recvalor')");
	header("location:lista_itens.php");
?>