<?php
namespace Drawing;

class Square {
    public function draw() {
        header('Content-Type: image/png');
        $image = imagecreatetruecolor(400, 400);
        $green = imagecolorallocate($image, 0, 255, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $white);
        imagefilledrectangle($image, 150, 150, 250, 250, $green);
        imagepng($image);
        imagedestroy($image);
    }
}
?>
