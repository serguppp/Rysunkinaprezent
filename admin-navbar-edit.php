<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: admin-logging.php");
    exit;
}

require_once './includes/editor.php';
require_once './includes/version-manager.php';

$site = new Site('includes/navbar.php', 'css/navbar.css');

if (isset($_POST['color'])) {
    $site->SetColor($_POST['color']);
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Navbar - edycja!" />
    <title>Navbar - edycja | Rysunki na prezent</title>
    <?php require_once 'includes/head.php'; ?>
</head>

<body>
    <main>
        <?php $site->Render()?>
        <div class="color-buttons">
            <a href="admin-panel.php">Powrót</a>
            <form action="" method="POST">
                <label for="color">Wybierz kolor tła:</label>
                <input type="color" name="color" id="color" value="<?php echo $color; ?>">
                <button type="submit">Zastosuj kolor</button>
                <button type="submit" name="color" value="<?php echo '#e1f3ff'; ?>">Zresetuj kolor</button>
            </form>
        </div>

    </main>
</body>


</html>