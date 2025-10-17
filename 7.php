<?php
$img = imagecreatefromjpeg("sample.jpg");
$white = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 4, 20, 20, "VIT Chennai", $white);
header("Content-Type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
?>

