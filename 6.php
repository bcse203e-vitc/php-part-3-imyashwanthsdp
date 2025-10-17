<?php
$img = imagecreate(200, 200);
$bg = imagecolorallocate($img, 230, 230, 230);
$blue = imagecolorallocate($img, 0, 0, 255);
$green = imagecolorallocate($img, 0, 150, 0);

imagerectangle($img, 40, 40, 160, 160, $blue);
imagefilledellipse($img, 100, 100, 80, 50, $green);

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

