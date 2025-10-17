<?php
$imagePath = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['file']['name'])) {
    $uploadDir = "uploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $fileTmp = $_FILES['file']['tmp_name'];
    $fileName = basename($_FILES['file']['name']);
    $targetFile = $uploadDir . $fileName;

    
    if (getimagesize($fileTmp)) {
        if (move_uploaded_file($fileTmp, $targetFile)) {
            $message = "Upload successful!";
            $imagePath = $targetFile;
        } else {
            $message = "Failed to upload file.";
        }
    } else {
        $message = "Only image files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Upload and Display Image</title>
</head>
<body>

<h2>Upload an Image</h2>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/*" required>
    <button type="submit">Upload</button>
</form>

<?php if ($message): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<?php if ($imagePath): ?>
    <img src="<?= htmlspecialchars($imagePath) ?>" alt="Uploaded Image" width="200" />
<?php endif; ?>

</body>
</html>

