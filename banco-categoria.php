<?php require_once 'cabecalho.php' ?>

<?php

// Função para adicionar a categoria no produto
function listaCategorias($conexao){
	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($conexao, $query);

	while($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}

?>