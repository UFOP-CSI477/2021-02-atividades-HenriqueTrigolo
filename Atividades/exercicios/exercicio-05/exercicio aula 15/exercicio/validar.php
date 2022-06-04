<?php
    $PrimeiroNome = $_POST['PrimeiroNome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Idade = $_POST['Idade'];
    $Estado = $_POST['Estado'];
    $Cidade = $_POST['Cidade'];
    $Endereco = $_POST['Endereco'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Genero = $_POST['gridRadios'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="validacao.css">
    <title>Confirmação</title>
</head>
<body>
    <div class="conteiner">
        <div class="box">
            <div class="cabecalho">
                <h1>Confirmação do Dados do usuário <?php echo $PrimeiroNome?></h1>
            </div>
            <div class="tabela">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>Nome</td>
                        <td><?php echo "$PrimeiroNome $Sobrenome"?></td>
                    </tr>
                    <tr>
                        <td>Idade</td>
                        <td><?php echo $Idade?></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td><?php echo $Estado?></td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td><?php echo $Cidade?></td>
                    </tr>
                    <tr>
                        <td>Endereco</td>
                        <td><?php echo $Endereco?></td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td><?php echo $Telefone?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><?php echo $Email?></td>
                    </tr>
                    <tr>
                        <td>Gênero</td>
                        <td><?php echo $Genero?></td>
                    </tr>
                </table>
            </div>
            <div class="retorno">
                <a href="validacao.html" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>