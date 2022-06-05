<?php

    require_once '../vendor/autoload.php';

    use App\Models\Estado;
    use App\Database\Connection;
    use App\Database\AdapterSQL;
    

    $connection = new Connection(new AdapterSQL());
    
   
    $connection->getAdapter()->conectar();
    //$connection->getAdapter()->inserir(" "," ");
    $produtos = $connection->getAdapter()->query();
    require 'produtosView.php';
?>