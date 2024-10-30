<?php
namespace Controllers;

use Drawing\Line;
use Drawing\Square;
use Drawing\Circle;

class DrawingController {
    public function drawLine() {
        $line = new Line();
        $line->draw();
    }

    public function drawSquare() {
        $square = new Square();
        $square->draw();
    }

    public function drawCircle() {
        $circle = new Circle();
        $circle->draw();
    }
}
?>
