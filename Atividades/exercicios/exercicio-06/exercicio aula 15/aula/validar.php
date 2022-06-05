<?php

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($user == "admin" && $senha == "12345"){
        echo "<h1>Bem vindo $user</h1>";
        echo "<p>Senha: $senha</p>";
    }else{
        echo "<h1>Usuário Invalido</h1>";
    }

    echo "<a href=\"index.php\">Voltar</a>";