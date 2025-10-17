<?php
$to = "example@domain.com";
$sub = "Contact Form Message";
$msg = "Name: " . $_POST['name'] . "\n";
$msg .= "Email: " . $_POST['email'] . "\n";
$msg .= "Message: " . $_POST['message'];
$headers = "From: " . $_POST['email'];
if (mail($to, $sub, $msg, $headers)) {
    echo "Mail Sent!";
} else {
    echo "Mail failed to send.";
}
?>

