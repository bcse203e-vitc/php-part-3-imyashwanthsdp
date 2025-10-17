<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
        $_SESSION['user'] = "admin";
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login</title>
</head>
<body>
<form method="POST" action="">
    <h2>Login</h2>
    <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <input type="text" name="user" placeholder="Username" required />
    <br /><br />
    <input type="password" name="pass" placeholder="Password" required />
    <br /><br />
    <input type="submit" value="Login" />
</form>
</body>
</html>

