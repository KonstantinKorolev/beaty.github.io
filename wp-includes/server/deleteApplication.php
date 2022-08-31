<?php
$install_path = $_SERVER['DOCUMENT_ROOT'];
require_once($install_path. '/wp-includes/server/connect.php');

$id = $_POST['id'];

if (isset($id)) {
    try {
        $sql = 'DELETE FROM applications WHERE id = :id';
        $params = [':id' => $id];
    
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    
        $delete = $stmt->fetch(PDO::FETCH_OBJ);
        echo json_encode(['Answer' => 'OK']);
    } catch (PDOException $e) {
        echo json_encode(['Error: ' => $e->getMessage()]);
    }
}
?>