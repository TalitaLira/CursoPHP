<?php require_once 'cabecalho.php' ?>

<?php

	// Declaração das variáveis que serão adicionadas no produto
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	$usado = $_POST['usado'];

	if(array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}

	// msg de sucesso ou erro caso o produto seja ou não adicionado
	if(insereProduto($conexao,$nome, $preco, $descricao, $categoria_id, $usado)){
?>
		<p class="alert-success">Produto <?= $nome ?>, R$ <?= $preco ?>  adicionado com sucesso!</p>
<?php
	} else {
		$msg = mysqli_error($conexao);
?>
		<p class="alert-danger">O produto <? = $nome; ?> não foi adicionado</p>
<?php

	}
?>

<?php include 'rodape.php' ?>