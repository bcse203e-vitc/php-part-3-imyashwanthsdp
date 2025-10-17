<?php
session_start();
$error = "";


$username = $_COOKIE['username'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';
    
    if ($user === "admin" && $pass === "1234") {
        $_SESSION['user'] = $user;
        
        if (isset($_POST['remember'])) {
            setcookie('username', $user, time() + 3600 * 24 * 30); 
        } else {
            setcookie('username', '', time() - 3600); 
        }
        
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
<title>Login with Remember Me</title>
</head>
<body>
<form method="POST" action="">
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <input type="text" name="user" placeholder="Username" required value="<?= htmlspecialchars($username) ?>" />
    <br /><br />
    <input type="password" name="pass" placeholder="Password" required />
    <br /><br />
    <label>
        <input type="checkbox" name="remember" <?= $username ? 'checked' : '' ?> /> Remember Me
    </label>
    <br /><br />
    <input type="submit" value="Login" />
</form>
</body>
</html>
