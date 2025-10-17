<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: user_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
    <form action="submit_feedback.php" method="post">
        <label>Enter your feedback:</label><br>
        <textarea name="feedback" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Send Feedback">
    </form>
</body>
</html>

