function drawShape(shape) {
    var img = new Image();
    img.src = 'index.php?action=' + shape; // AJAX request to draw shape
    img.onload = function() {
        document.getElementById('drawingArea').appendChild(img);
    };
}

function drawLine() {
    drawShape('line');
}

function drawSquare() {
    drawShape('square');
}

function drawCircle() {
    drawShape('circle');
}
