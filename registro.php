<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro</title>
	<link type="text/css"href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<hl class ="titulo"> Formulario de Registro - PHP</hl>
	<form method="post" action="grava.php" class="formulario">
		<input type="text" name="fnome" placeholder="nome" required class="input"><br>
		<input type="text" name="fcpf" placeholder="cpf" required class="input"><br>
		<input type="inteiro" name="fsaldo" placeholder="saldo" required class="input"><br>
		<input type="inteiro" name="feconomizar" placeholder="economizar" required class="input"><br>
		<input type="text" name="femail" placeholder="email" required class="input"><br>
		<input type="text" name="flogin" placeholder="login" required class="input"><br>
		<input type="senha" name="fsenha" placeholder="senha" required class="input"><br>
		<input type="submit" value="Registrar" class="botform">
	</form>
</body>
</html>
