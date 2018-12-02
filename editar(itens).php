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
		$seleciona=mysqli_query($conexao, "select * from item where codigo=$reccodigo");
		$campo=mysqli_fetch_array($seleciona);
	?>
	<form method="post" action="gravaedita.php" class="formulario">
		<input type="hiden" name="fid" value="<?=$campo["codigo"]?>">
		<input type="text" name="ftipo" placeholder="tipo" required class="input" value="<?=$campo["tipo"]?>"><br>
		<input type="int" name="fvalor" placeholder="valor" required class="input" value="<?=$campo["valor"]?>"><br>
		<input type="submit" value="GRAVAR" class="botform">
	</form>
</body>
</html>