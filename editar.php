<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Edição</title>
	<link type="text/css"href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<hl class ="titulo"> Formulario de Edição - PHP</hl>
	<?php
		include("conexao.php");
		$recid=$_GET["editacodigo"];
		$seleciona=mysqli_query($conexao, "select * from usuario where codigo=$reccodigo");
		$campo=mysqli_fetch_array($seleciona);
	?>
	<form method="post" action="gravaedita.php" class="formulario">
		<input type="hiden" name="fid" value="<?=$campo["codigo"]?>">
		<input type="text" name="fnome" placeholder="nome" required class="input" value="<?=$campo["nome"]?>"><br>
		<input type="text" name="fcpf" placeholder="cpf" required class="input" value="<?=$campo["cpf"]?>"><br>
		<input type="inteiro" name="fsaldo" placeholder="saldo" required class="input" value="<?=$campo["saldo"]?>"><br>
		<input type="inteiro" name="feconomizar" placeholder="economizar" required class="input" value="<?=$campo["economizar"]?>"><br>
		<input type="text" name="femail" placeholder="email" required class="input" value="<?=$campo["email"]?>"><br>
		<input type="text" name="flogin" placeholder="login" required class="input" value="<?=$campo["login"]?>"><br>
		<input type="senha" name="fsenha" placeholder="senha" required class="input" value="<?=$campo["senha"]?>"><br>
		<input type="submit" value="GRAVAR" class="botform">
	</form>
</body>
</html>