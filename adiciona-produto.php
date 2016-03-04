<?php require_once 'cabecalho.php' ?>

<?php

//Dando ação ao formulário e resposta de sucesso e fracasso ao adicionar o produto.

$nome = $_GET["nome"];
$preco = $_GET["preco"];


if(insereProduto($conexao, $nome, $preco)){
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

<?php require_once 'rodape.php' ?>