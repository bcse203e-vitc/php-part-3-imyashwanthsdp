<?php
$img = imagecreate(250, 250);
$background = imagecolorallocate($img, 240, 240, 240);

for ($i = 0; $i < 15; $i++) {
    $red = rand(50, 255);
    $green = rand(50, 255);
    $blue = rand(50, 255);
    $color = imagecolorallocate($img, $red, $green, $blue);
    $x = rand(30, 220);
    $y = rand(30, 220);
    $width = rand(20, 60);
    $height = rand(20, 60);
    imagefilledrectangle($img, $x, $y, $x + $width, $y + $height, $color);
}

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

