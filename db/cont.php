<?php
    $host = 'localhost';
    $db = 'school_db';
    $user = 'root';
    $passw = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charst=$charset";

    try{
        $pdo = new PDO($dsn,$user,$passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo $e->getMessage();
        throw new PDOException($e->getMessage());
    }

?>