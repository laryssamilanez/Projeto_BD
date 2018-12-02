<?php
	include("conexao.php");
	
	$reccodigo=$_POST["fcodigo"];
	$rectipo=$_POST["ftipo"];
	$recvalor=$_POST["fvalor"];
	mysqli_query($conexao, "update itens set tipo='$rectipo', valor='$recvalor' where codigo='$reccodigo'");
	header("location:lista.php")
?>