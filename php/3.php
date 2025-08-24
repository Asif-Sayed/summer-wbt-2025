<?php
//3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE
$number = 6;
function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "$number is an Even number.";
    } else {
        echo "$number is an Odd number.";
    }
}
echo checkOddEven($number);
?>