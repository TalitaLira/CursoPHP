<?php require_once 'conexao.php' ?>

<?php

	function listaProdutos($conexao){
		$produtos = array();
		$resultado = mysqli_query($conexao, "select * from produtos");

		while($prod = mysqli_fetch_assoc($resultado)){
			array_push($produtos, $prod);
		}

		return $produtos;
	}

	$produtos = listaProdutos($conexao);


	function insereProduto($conexao, $nome, $preco){
		$query = "insert into produtos(nome,preco) values('{$nome}',{$preco})"; 
		/*no preço, como é um número, não utiliza aspas, já o nome é um VARCHAR "texto"*/ 

		return mysqli_query($conexao,$query); 
		/*conectando com mySQL; se não usar o RETURN, a mysqli_query não retorna nada, o produto sendo inserido ou não.*/
}


	function removerProduto($conexao, $id){
		$query = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $query);
	}

?>