<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Estados</title>
</head>
<body>
    <form action="estadosControllerInsert.php" method="post">
        <label for="estado">Nome do Estado:</label>
        <input type="text" name="estado" id="estado">

        <label for="cidade">Nome da Cidade</label>
        <input type="text" name="cidade" id="cidade">

        <input type="submit" value="Inserir">
    </form>
</body>
</html>