<?php
$install_path = $_SERVER['DOCUMENT_ROOT'];
require_once($install_path. '/wp-includes/server/connect.php');

$login = trim($_POST['login']);
$pwd = trim($_POST['pass']);

if (isset($login) && isset($pwd)) {
    try {
        $sql = 'SELECT login, password FROM admins WHERE login = :login';
        $params = [':login' => $login];
    
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    
        $admin = $stmt->fetch(PDO::FETCH_OBJ);
    
        if ($admin) {
            if (password_verify($pwd, $admin->password)) {
                $message = array('URL' => 'http://beatysalon/личный-кабинет-администратора/',
                                'Error' => 'null');
                echo json_encode($message);
            } else {
                $message = array('Error' => 'Неправильный пароль');
                echo json_encode($message); 
            }
        } else {
            $message = array('Error' => 'Неверный логин или пароль');
            echo json_encode($message); 
        }
    } catch (PDOException $e) {
        $message2 = array('Error' => $e.getMessage());
        echo json_encode($message2); 
    }
} else {
    $message3 = array('Error' => 'Пожалуйста, заполните все поля');
    echo json_encode($message3); 
}

?>