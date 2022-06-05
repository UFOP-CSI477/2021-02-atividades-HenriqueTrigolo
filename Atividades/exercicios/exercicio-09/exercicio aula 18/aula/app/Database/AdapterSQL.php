<?php

namespace App\Database;

class AdapterSQL implements AdapterInterface{
    public function open(){
        echo "<br>AdapterSQL: open()<br>";
    }

    public function close(){
        echo "<br>AdapterSQL: close()<br>";
    }

    public function get(){
        echo "<br>AdapterSQL: get()<br>";
    }
}
?>