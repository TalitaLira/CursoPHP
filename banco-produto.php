	<?php

// Função para listar na tela os produtos adicionados
function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria from produtos as p join categorias as c on p.categoria_id = c.id");

	while($prod = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $prod);
	}
	return $produtos;
}

$produtos = listaProdutos($conexao);

// Função para inserir o produto
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "insert into produtos(nome,preco, descricao, categoria_id, usado) values('{$nome}',{$preco}, '{$descricao}', {$categoria_id}, {$usado})"; 

	return mysqli_query($conexao,$query); 
}

// Função para remover o produto da tabela
function removerProduto($conexao, $id){
	return mysqli_query($conexao, "delete from produtos where id= {$id}");
}

?>