<?php
$img = imagecreate(400, 60);
$bg = imagecolorallocate($img, 200, 220, 255);
$darkGray = imagecolorallocate($img, 50, 50, 50);
$text = "Banner created at " . date("Y-m-d H:i:s");
imagestring($img, 5, 15, 20, $text, $darkGray);
header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

