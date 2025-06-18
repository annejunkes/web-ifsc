<?php
class Conexao{

    public static function getConexao(){

        //Classe PDO connection $dbh = new PDO('mysql:host=localhost;dbname=test'. $user, $pass);

        return new PDO('mysql:host=localhost;dbname=crud', 'root', 'admin',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTIONs]);
    }
}

?>