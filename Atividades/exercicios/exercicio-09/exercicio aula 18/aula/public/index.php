<?php

    require_once '../vendor/autoload.php';

    use App\Models\Estado;
    use App\Database\Connection;
    use App\Database\AdapterSQL;

    $estado = new Estado(1, "Minas Gerais", "MG");
    var_dump($estado);

    $connection = new Connection(new AdapterSQL());
    var_dump($connection);

    $connection->getAdapter()->open();
    $connection->getAdapter()->get();
    $connection->getAdapter()->close();

?>