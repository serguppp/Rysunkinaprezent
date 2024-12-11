<?php
session_start();

if (isset($_SESSION['logged_in'])) {
    header("Location: admin-panel.php");
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

    <?php require_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/admin-logging.css?v=1.0.2">
</head>

<body>
    <header>
        <?php require_once 'includes/navbar.php'; ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="logging-panel col-12 d-flex justify-content-center align-items-center flex-column ">
                    <h1 class="text-1 inter-bold">Panel administratora</h1>

                    <div>
                        <form id="loginForm" class="form mt-3">
                            <div>
                                <div class="form-outline mt-3 " data-mdb-input-init>
                                    <input type="text" name="login" placeholder="login" class="form-control bg-white">
                                </div>

                                <div class="form-outline mt-3" data-mdb-input-init>
                                    <input type="password" name="password" placeholder="hasło" class="form-control bg-white">
                                </div>
                                <button type="submit" class="btn btn-primary common-button btn-block  mt-3" data-mdb-ripple-init>Zaloguj się</button>
                        </form>

                        <h4 id="loginError" class="text-danger inter-bold400 login-error-string text-center mt-3"></h4>
                    </div>
                </div>
            </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("loginForm");
            let loginError = document.getElementById("loginError");

            if (form) {
                form.addEventListener("submit", function(event) {
                    event.preventDefault();

                    let formData = new FormData(this);

                    const login = formData.get('login');
                    const password = formData.get('password');

                    if (!login || !password) {
                        console.error("Proszę wprowadzić login i hasło.");
                        loginError.textContent = "Proszę wprowadzić login i hasło."
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
                                console.error(result.message);
                                loginError.textContent = result.message;
                            }
                        })
                        .catch(error => {
                            console.error("console.error:", error);
                            loginError.textContent = "Wystąpił błąd. Proszę spróbować później.";
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