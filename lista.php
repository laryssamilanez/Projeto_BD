<?php
    include('conexao.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listagem de Dados - PHP</title>
<link type="text/css" href="css/estilo.css" rel="stylesheet">
<link type="text/css" href="font-awesome-4.6.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/jscript" src="script.js"></script>
</head>
<body>
	<hl class="titulo">Listagem de Dados - PHP</hl>
	<table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
		<tr>
			<td><strong>NOME</strong></td>
			<td><strong>CPF</strong></td>
			<td><strong>SALDO</strong></td>
			<td><strong>ECONOMIZAR</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>LOGIN</strong></td>
			<td><strong>SENHA</strong></td>
			<td width="10"><strong>ALTERAR</strong></td>
			<td width="10"><strong>EXCLUIR</strong></td>
		<tr>
		<?php
			$consulta = "SELECT * FROM usuario ORDER BY codigo DESC";
            $sql_objeto = $conexao->query($consulta);
            while($campo = mysqli_fetch_assoc($sql_objeto)):
		?>
				<tr>
					<td><?=$campo["nome"]?></td>
					<td><?=$campo["cpf"]?></td>
					<td><?=$campo["saldo"]?></td>
					<td><?=$campo["economizar"]?></td>
					<td><?=$campo["email"]?></td>
					<td><?=$campo["login"]?></td>
					<td><?=$campo["senha"]?></td>
					<td align="center"><a href="editar.php?editaid=<?=$campo["codigo"]?>"><i class="fa fa-edit"></i></a></td>
					<td align="center"><a href="#" onclick="verifica(<?=$campo["codigo"]?>)"><i class="fa fa-trash"></i></a></td>
				<tr>
		<?php endwhile; ?>
	</table>
</body>
</html>
