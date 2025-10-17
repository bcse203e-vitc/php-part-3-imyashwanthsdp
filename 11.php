<?php
$img = imagecreate(200, 200);

for ($y = 0; $y < 200; $y++) {
    $color = imagecolorallocate($img, 0, $y, 255 - $y);
    imageline($img, 0, $y, 200, $y, $color);
}

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

