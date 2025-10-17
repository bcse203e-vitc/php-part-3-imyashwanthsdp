<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
} else {
    $count = 1;
}
setcookie('visits', $count, time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Visit Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #eef2f7;
            text-align: center;
        }
        .message {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: inline-block;
            font-size: 1.2rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php echo "Welcome! You have visited this page $count times."; ?>
    </div>
</body>
</html>
