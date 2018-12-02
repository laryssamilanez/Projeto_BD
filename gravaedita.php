<?php
	include("conexao.php");
	
	$reccodigo=$_POST["fcodigo"];
	$recnome=$_POST["fnome"];
	$reccpf=$_POST["fcpf"];
	$recsaldo=$_POST["fsaldo"];
	$receconomizar=$_POST["feconomizar"];
	$recemail=$_POST["femail"];
	$reclogin=$_POST["flogin"];
	$recsenha=$_POST["fsenha"];
	mysqli_query($conexao, "update usuario set nome='$recnome', cpf='$reccpf',saldo='$recsaldo',economizar='$receconomizar',email='$recemail', login='$reclogin', senha='$recsenha' where codigo='$reccodigo'");
	header("location:lista.php")
?>