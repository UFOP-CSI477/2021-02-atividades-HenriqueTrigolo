<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estadosView.css">
    <title>Visualização do Banco de Dados</title>
</head>
<body>
    <div class="conteiner">
        <div class="box">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Estados</th>
                        <th>Cidades</th>
                    </tr>
                </thead>
                <?php
                    while($e = $estados->fetch()){
                        echo "<tr>
                                <td>".$e["Estado"] ."</td>
                                <td>".$e["Cidade"] 
                            ."</li>";
                    }
                ?>
            </table>
        </div>
    </div>
    
</body>
</html>