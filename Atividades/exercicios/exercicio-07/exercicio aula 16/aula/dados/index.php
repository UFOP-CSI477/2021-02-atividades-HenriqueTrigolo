<?php
	require_once 'conexao.php';

	$estados = $pdo->query("SELECT * FROM regiao");
	//var_dump($estados->fetchAll());
	require 'estadosView.php';

?>

