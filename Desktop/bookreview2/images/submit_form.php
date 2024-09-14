<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Do something with the data, like send an email or store it
    // This example just displays the data
    echo "Thank you, $name. Your message has been received!";
}
?>
