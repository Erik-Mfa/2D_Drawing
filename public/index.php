<?php
// Manually include the required classes
require_once '../src/Controllers/DrawingController.php';
require_once '../src/Drawing/Line.php';
require_once '../src/Drawing/Square.php';
require_once '../src/Drawing/Circle.php';

// Check if the draw action is set
if (isset($_GET['action'])) {
    $controller = new \Controllers\DrawingController();

    switch ($_GET['action']) {
        case 'line':
            $controller->drawLine();
            break;
        case 'square':
            $controller->drawSquare();
            break;
        case 'circle':
            $controller->drawCircle();
            break;
        default:
            http_response_code(404);
            echo 'Action not found.';
            break;
    }
    exit; // Ensure no further output is sent after the image
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2D Drawing App</title>
    <link rel="stylesheet" href="assets/styles.css"> <!-- Link to your CSS file -->
    <script src="assets/script.js"></script>
</head>
<body>
    <h1>2D Drawing App</h1>
    <button onclick="drawLine()">Start Thread 1: Draw Line</button>
    <button onclick="drawSquare()">Start Thread 2: Draw Square</button>
    <button onclick="drawCircle()">Start Thread 3: Draw Circle</button>
    <div id="drawingArea"></div>
</body>
</html>
