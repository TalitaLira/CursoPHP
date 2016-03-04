<?php require_once 'conexao.php' ?>

<?php

//Esta funcão lista os produtos na tela

	function listaProdutos($conexao){
		$produtos = array();
		$resultado = mysqli_query($conexao, "select * from produtos");

		while($prod = mysqli_fetch_assoc($resultado)){
			array_push($produtos, $prod);
		}

		return $produtos;
	}

	$produtos = listaProdutos($conexao);

// Esta função insere o produto no banco

	function insereProduto($conexao, $nome, $preco){
		$query = "insert into produtos(nome,preco) values('{$nome}',{$preco})"; 

		return mysqli_query($conexao,$query); 
}

//Esta função remove o produto do banco

	function removerProduto($conexao, $id){
		$query = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $query);
	}

?>