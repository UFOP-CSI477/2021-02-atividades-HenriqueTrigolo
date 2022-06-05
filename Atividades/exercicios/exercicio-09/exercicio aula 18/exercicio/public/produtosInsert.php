<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="produtosView.css">
    <script src="validacao.js"></script>
    <title>Inserir Produtos</title>
</head>
<body>
    <div class="conteiner">
        <div class="box">
            <form action="produtosControllerInsert.php" method="post" name="formProdutos">
                <div class="row mb-3">
                    <label for="nome" class="col-sm-4 col-form-label">Nome do Produto</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="unidadeMedida" class="col-sm-4 col-form-label">Unidade de Medida</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="unidadeMedida" id="unidadeMedida">
                    </div>
                </div>
                <div class="btns">
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                    <input type="submit" class="btn btn-primary" value="Inserir" onclick="validar()">
                </div>
                
            </form>
        </div>
    </div>
   
</body>
</html>