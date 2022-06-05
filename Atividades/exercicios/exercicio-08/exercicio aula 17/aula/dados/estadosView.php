<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização do Banco de Dados</title>
</head>
<body>
    <a href="estadosViewInsert.php">Inserir</a>
    <ol>
        <?php
            while($e = $estados->fetch()){
                echo "<li>" .$e["Estado"] ." -> " .$e["Cidade"] ."</li>";
            }
        ?>
    </ol>
</body>
</html>