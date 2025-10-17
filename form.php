<?php
session_start();
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_captcha = $_POST['captcha'] ?? '';

    if ($user_captcha === $_SESSION['captcha']) {
        $message = "CAPTCHA verified successfully!";
    } else {
        $message = "Incorrect CAPTCHA. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Simple CAPTCHA Verification</title>
</head>
<body>

<form method="POST" action="">
    <p>Enter the number shown below:</p>
    <p><img src="captcha.php" alt="CAPTCHA Image" /></p>
    <input type="text" name="captcha" required />
    <br /><br />
    <input type="submit" value="Verify" />
</form>

<?php if ($message): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

</body>
</html>

