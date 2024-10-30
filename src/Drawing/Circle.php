<?php
namespace Drawing;

class Circle {
    public function draw() {
        header('Content-Type: image/png');
        $image = imagecreatetruecolor(400, 400);
        $color1 = imagecolorallocate($image, 0, 255, 255); // Light Blue
        $color2 = imagecolorallocate($image, 0, 128, 128); // Dark Green

        // Create gradient effect
        for ($r = 0; $r <= 200; $r++) {
            $color = imagecolorallocate($image, 0, 255 - ($r / 2), 255 - $r);
            imagefilledarc($image, 200, 200, $r * 2, $r * 2, 0, 360, $color, IMG_ARC_PIE);
        }

        imagepng($image);
        imagedestroy($image);
    }
}
?>
