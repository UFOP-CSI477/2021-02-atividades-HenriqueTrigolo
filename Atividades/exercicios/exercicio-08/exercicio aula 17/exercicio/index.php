<?php
	require_once 'conexao.php';

	$produtos = $pdo->query("SELECT * FROM produtos");
	
	require 'produtosView.php';

?>

