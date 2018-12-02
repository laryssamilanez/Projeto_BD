<?php
	include("conexao.php");
	$recnome=$_GET["fnome"];
	$reccpf=$_GET["fcpf"];
	$recsaldo=$_GET["fsaldo"];
	$receconomizar=$_GET["feconomizar"];
	$recemail=$_GET["femail"];
	$reclogin=$_GET["flogin"];
	$recsenha=$_GET["fsenha"];
	
	mysqli_query($conexao,"insert into usuario (nome, cpf, saldo, economizar, email, login, senha) values ('$recnome', '$reccpf', '$recsaldo', '$receconomizar', '$recemail', '$reclogin', '$recsenha')");
	header("location:lista.php");
?>