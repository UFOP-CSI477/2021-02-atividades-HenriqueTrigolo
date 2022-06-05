<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="produtosView.css">
    <title>Visualização do Banco de Dados</title>
</head>
<body>
    <div class="conteiner">
        <div class="box">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do produto</th>
                        <th>Unidade de Medida</th>
                    </tr>
                </thead>
                <?php
                    while($e = $produtos->fetch()){
                        echo "<tr>
                                <td>".$e["ID"] ."</td>
                                <td>".$e["Nome"] ."</td>
                                <td>".$e["UM"]
                            ."</tr>";
                    }
                ?>
            </table>
            <a href="produtosInsert.php" class="btn btn-primary">Inserir</a>
        </div>
    </div>
</body>
</html>