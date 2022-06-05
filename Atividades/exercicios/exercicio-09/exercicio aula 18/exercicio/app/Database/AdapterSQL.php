<?php

namespace App\Database;
use PDO;

class AdapterSQL implements AdapterInterface{
    private $pdo;
    public function __construct(){
        
    }

    public function open(){
        echo "<br>AdapterSQL: open()<br>";
    }

    public function close(){
        echo "<br>AdapterSQL: close()<br>";
    }

    public function get(){
        echo "<br>AdapterSQL: get()<br>";
    }

    public function conectar(){
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $banco = 'conexao';
        $senha = '';

        date_default_timezone_set('America/Sao_Paulo');

        try {
            $this->pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
        }catch (Exception $e) {
            echo "<h2>Erro ao conectar com o banco de dados.</h2>" .$e;
        }
    }

    public function inserir($nome, $UM){
        if(empty($nome) || empty($UM)){
            echo '<div><a href="index.php">Voltar</a></div>';
            die("Informe os campos corretamente");
        }

        $stnt = $this->pdo->prepare("INSERT INTO produtos set Nome = :nome, UM = :UM");
        $stnt->bindValue(":nome", $nome);
        $stnt->bindValue(":UM", $UM);
        $stnt->execute();
    }

    public function query(){
        return $this->pdo->query("SELECT * FROM produtos");
    }
}
?>