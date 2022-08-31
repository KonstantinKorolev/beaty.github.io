<?php
    $driver = 'mysql';
    $host = '127.0.0.1';
    $db_name = 'beatysalon';
    $db_user = 'root';
    $db_pass = '';
    $db_port = '3308';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
        $pdo = new PDO("$driver:host=$host;port=$db_port;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options);
    } catch (PDOException $e) {
        die();
    }


?>