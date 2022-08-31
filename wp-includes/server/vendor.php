<?php
$install_path = $_SERVER['DOCUMENT_ROOT'];
require_once($install_path. '/wp-includes/server/connect.php');
/* echo '<pre>';
var_dump($_POST);
*/
$fullName = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$service = trim($_POST['service']);
if (!empty($fullName) && !empty($phone) && !empty($email) && !empty($service)) {
    try {
        $sql = 'INSERT INTO applications(fullname, phone, email, service) VALUES(:fullname, :phone, :email, :service)';
        $params = [':fullname' => $fullName, ':phone' => $phone, ':email' => $email, ':service' => $service];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);


    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    
} else {
    $message = array('Error' => 'Пожалуйста, заполните все поля');
    echo json_encode($message);
};
?>