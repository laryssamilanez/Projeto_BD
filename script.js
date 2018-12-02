function verifica(reccodigo){
	if(confirm("Tem certeza de que deseja excluir permanentemente este cadastro?")){
		window.location="excluir.php?codigoexc=" + reccodigo
	}
}