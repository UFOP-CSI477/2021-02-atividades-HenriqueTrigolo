<?php
    require_once 'conexao.php';

    $nome = $_POST['nome'];
    $UM = $_POST['unidadeMedida'];

    if(empty($nome) || empty($UM)){
        echo '<div><a href="index.php">Voltar</a></div>';
        die("Informe os campos corretamente");
    }

    $stnt = $pdo->prepare("INSERT INTO produtos set Nome = :nome, UM = :UM");
    $stnt->bindValue(":nome", $nome);
    $stnt->bindValue(":UM", $UM);

    $stnt->execute();

    header('location: index.php');
    exit();
?>