<?php

require_once '../vendor/autoload.php';

use App\Models\Estado;
use App\Database\Connection;
use App\Database\AdapterSQL;


    $connection = new Connection(new AdapterSQL());

    $nome = $_POST['nome'];
    $UM = $_POST['unidadeMedida'];
    $connection->getAdapter()->conectar();
    $connection->getAdapter()->inserir($nome, $UM);
    
    header('location: index.php');
    exit();
?>