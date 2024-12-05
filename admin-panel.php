<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: admin-logging.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Panel administratora" />
    <title>Panel administratora | Rysunki na prezent</title>

    <?php require_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/admin-panel.css?v=1.0.0">
</head>

<body>
    <header>
        <?php require_once 'includes/navbar.php';?>
    </header>
    <h1>Witaj, admin!</h1>
    <a href="includes/admin-logging-system.php?logout=1">Wyloguj się</a>
</body>

</html>
