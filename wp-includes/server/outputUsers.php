<?php
$install_path = $_SERVER['DOCUMENT_ROOT'];
require_once($install_path. '/wp-includes/server/connect.php');
session_start();

try {
    $sql = 'SELECT * FROM applications';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
    $_SESSION['users'] = $users;

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>