<?php
namespace Drawing;

class Line {
    public function draw() {
        header('Content-Type: image/png');
        $image = imagecreatetruecolor(400, 400);
        $red = imagecolorallocate($image, 255, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $white);
        imageline($image, 200, 50, 200, 350, $red);
        imagepng($image);
        imagedestroy($image);
    }
}
?>
