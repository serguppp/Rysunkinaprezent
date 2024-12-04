<?php
session_start();

if (isset($_SESSION['logged_in'])) {
    header("Location: admin-system.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Panel administratora" />
    <title>Panel administratora | Rysunki na prezent</title>

    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/gallery.css?v=1.1.0">
</head>

<body>
    <form id="loginForm" class="form">
        <input type="login" name="login" />
        <input type="password" name="password" />
        <input type="submit" value="zaloguj się" />
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("loginForm");

            if (form) {
                form.addEventListener("submit", function(event) {
                    event.preventDefault();

                    let formData = new FormData(this);

                    const login = formData.get('login');
                    const password = formData.get('password');

                    if (!login || !password) {
                        alert("Proszę wprowadzić login i hasło.");
                        return;
                    }

                    fetch("includes/admin-logging-system.php", {
                            method: "POST",
                            body: formData
                        })
                        .then(response => response.json())
                        .then(result => {
                            if (result.success) {
                                window.location.href = "admin-panel.php";
                            } else {
                                alert(result.message);
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            alert("Wystąpił błąd. Proszę spróbować później.");
                        });
                });
            } else {
                console.error("Błąd związany z formularzem");
            }
        });
    </script>

    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>

</html>