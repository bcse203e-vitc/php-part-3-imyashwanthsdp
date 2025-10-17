<?php
$maxWidth = 200;
$maxHeight = 150;

list($origWidth, $origHeight, $type) = getimagesize("image.jpg");

$ratio = $origWidth / $origHeight;

if ($maxWidth / $maxHeight > $ratio) {
    $newHeight = $maxHeight;
    $newWidth = $maxHeight * $ratio;
} else {
    $newWidth = $maxWidth;
    $newHeight = $maxWidth / $ratio;
}

switch ($type) {
    case IMAGETYPE_JPEG:
        $src = imagecreatefromjpeg("image.jpg");
        break;
    case IMAGETYPE_PNG:
        $src = imagecreatefrompng("image.jpg");
        break;
    case IMAGETYPE_GIF:
        $src = imagecreatefromgif("image.jpg");
        break;
    default:
        die("Unsupported image format.");
}

$dst = imagecreatetruecolor($newWidth, $newHeight);

imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

header("Content-Type: image/jpeg");
imagejpeg($dst);

imagedestroy($src);
imagedestroy($dst);
?>

