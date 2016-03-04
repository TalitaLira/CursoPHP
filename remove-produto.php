<?php require_once 'conexao.php' ?>
<?php require_once 'banco-produto.php' ?>
<?php
 	$id = $_GET["id"];

 		if(removerProduto($conexao, $id)){
 			header("location: produto-lista.php?removido=true");

 		} else {
 			header("location:produto-lista.php");
 		}

require_once 'rodape.php';
?>
