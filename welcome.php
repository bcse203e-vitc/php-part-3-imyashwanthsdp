<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Welcome</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
<p><a href="logout.php">Logout</a></p>
</body>
</html>

