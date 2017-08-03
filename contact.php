<?php
session_start();

if($_POST["submit"]) {
    $recipient="jrdubina@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
	$selectBox=$_POST["selectBox"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\nBudget:$selectBox \n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

	$_SESSION['confirm'] = "<p>Thank you! Your message has been sent.</p>";
}
header("Location: http://www.jareddubina.com/");
?>