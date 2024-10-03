<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST); // Add this line for debugging
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "serg.u@wp.pl";
        $subject = "Nowa wiadomość z formularza kontaktowego";
        $body = "Imię: $name\nEmail: $email\nWiadomość:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Wiadomość została wysłana.";
        } else {
            echo "Wystąpił błąd podczas wysyłania wiadomości.";
        }
    } else {
        echo "Wszystkie pola muszą być wypełnione.";
        echo $to;
        echo $subject;
        echo $body;
        echo $headers;
    }
}
?>
