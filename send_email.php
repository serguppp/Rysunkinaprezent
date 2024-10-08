<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "serg.u@wp.pl";
        $subject = "Nowa wiadomość z formularza kontaktowego";
        $body = "Imię: $name\nEmail: $email\nWiadomość:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "success"; 
        } else {
            echo "Wystąpił błąd podczas wysyłania wiadomości.";
        }
    } else {
        echo "Wszystkie pola muszą być wypełnione.";
    }
}
?>
