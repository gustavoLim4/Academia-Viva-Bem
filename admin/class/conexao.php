<?php 

class conexao {

    public static function Ligarconexao(){
        $conn = new PDO('mysql:dbname=dbvivabem;host=localhost', 'root', ''); 
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

}





