<?php

function db_connect(){
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    $user= DB_USERNAME;
    $password= DB_PASSWORD;
    try {
        $PDO = new PDO($dsn, $user, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $PDO;
    } catch (PDOexception $e) {
        echo' ERRO: '. $e->getCode() . 'Mensagem: ' . $e->getMessage();
    }
}


?>