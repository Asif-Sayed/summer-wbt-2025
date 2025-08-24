<?php


// Function to print a right-angled triangle
function printTriangle($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Test the function
printTriangle(5);


// Function to print a square pattern
// function printSquare($size) {
//     for ($i = 1; $i <= $size; $i++) {
//         for ($j = 1; $j <= $size; $j++) {
//             echo "* ";
//         }
//         echo "<br>";
//     }
// }

// // Test the function
// printSquare(4);


/*
// Function to print a diamond pattern
function printDiamond($rows) {
    // Upper half of the diamond
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = $i; $j < $rows; $j++) {
            echo "&nbsp;&nbsp;"; // For space
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }

    // Lower half of the diamond
    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = $rows; $j > $i; $j--) {
            echo "&nbsp;&nbsp;"; // For space
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Test the function
printDiamond(5);


*/

?>


