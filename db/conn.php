<?php
   //Development Connection
    //$host = '127.0.0.1';
    //$db = 'attendance_db';
    //$user = 'root';
    //$pass = '';
   // $charset = 'utf8mb4';

   //Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'zfOW71A5Tk';
    $user = 'zfOW71A5Tk';
    $pass = '1krT4yqIlw';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connected';
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);


?>