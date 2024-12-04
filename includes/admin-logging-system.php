<?php
require_once('login-handler.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $handler = new LoginHandler($login, $password);
    $response = $handler->login();

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['logout'])) {
    $handler = new LoginHandler();
    $response = $handler->logout();

    header('Content-Type: application/json');
    echo json_encode($response);

    header("Location: admin-logging.php");
    exit;
}
