<?php
session_start();

function Login($login, $password)
{
    if ($login == 'admin' && $password == 'admin') {
        $_SESSION['logged_in'] = strip_tags($login);
        echo json_encode(['success' => true]);
        exit; 
    } else {
        throw new Exception('Podano błędne dane logowania');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if (isset($_SESSION['logged_in'])) {
        header("Location: admin.php");
        exit;
    }

    if (!empty($login) && !empty($password)) {
        try {
            Login($login, $password);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Podano niekompletne dane do logowania.']);
    }
}
?>
