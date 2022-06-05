<?php
    require_once 'conexao.php';

    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];

    if(empty($estado) || empty($cidade)){
        echo '<div><a href="index.php">Voltar</a></div>';
        die("Informe os campos corretamente");
    }

    $stnt = $pdo->prepare("INSERT INTO regiao set Estado = :estado, Cidade = :cidade");
    $stnt->bindValue(":estado", $estado);
    $stnt->bindValue(":cidade", $cidade);

    $stnt->execute();
    
    header('location: index.php');
    exit();

?>