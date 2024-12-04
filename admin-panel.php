<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: admin-logging.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <title>Panel administratora</title>
</head>

<body>
    <h1>Witaj, admin!</h1>
    <a href="admin-logging-system.php?logout=1">Wyloguj się</a>
</body>

</html>
