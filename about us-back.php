<?php
include 'about us.php';

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $to = "Micalifornia0202@gmail.com";
    $headers = "From: " . $email;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    mail($to, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}
