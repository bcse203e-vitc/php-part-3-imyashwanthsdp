<?php
session_start();
if (isset($_POST['username'])) {
    $_SESSION['user'] = $_POST['username'];
    header("Location: feedback_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="username" required>
        <input type="submit" value="Proceed">
    </form>
</body>
</html>

