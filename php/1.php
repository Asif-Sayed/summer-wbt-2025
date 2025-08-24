<?php
$length = 5;
$width = 10;

function calculateRectangle($length, $width) {
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area of Rectangle: $area <br>";
    echo "Perimeter of Rectangle: $perimeter";
}

echo calculateRectangle($length, $width);
?>