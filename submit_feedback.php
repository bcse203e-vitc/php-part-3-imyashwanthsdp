<?php
session_start();
$name = $_SESSION['user'] ?? "Guest";
$msg = "Feedback from $name: " . $_POST['feedback'];
mail("admin@vit.ac.in", "Student Feedback", $msg, "From: noreply@vit.ac.in");
echo "Thank you, $name. Your feedback has been sent successfully!";
?>

