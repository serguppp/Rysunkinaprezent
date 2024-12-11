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
<link rel="stylesheet" href="css/admin-panel.css?v=1.0.1">
</head>

<body>
    <header>
        <?php require_once 'includes/navbar.php'; ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row d-flex flex-column align-items-center justify-content-center">
                <div class="admin-panel-title col-12 d-flex align-items-center justify-content-center">
                    <h1 class="text-1"> Edytor treści </h1>
                </div>

                <div class="row d-flex text-center">
                    <div class="col-12">
                        <h4><a href="admin-navbar-edit.php">Nagłówek (test)</a></h4>
                        <h4><a href="#">Galeria</a></h4>
                        <h4><a href="#">Galeria</a></h4>
                        <h4><a href="#">Galeria</a></h4>
                        <h4><a href="#">Galeria</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <a href="includes/admin-logging-system.php?logout=1">Wyloguj się</a>
</body>

</html>