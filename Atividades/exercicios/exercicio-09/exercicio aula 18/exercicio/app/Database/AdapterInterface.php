<?php

namespace App\Database;

interface AdapterInterface{
    public function open();
    public function close();
    public function get();
    public function conectar();
    public function inserir($nome, $UM);
    public function query();
}
?>