<?php
echo" <h4> Write a PHP script to calculate the simple interest.Hints: Simple Interest = (Principal × Rate × Time) / 100</h4>";
$principal = 2000; // Principal amount
$rate = 5; // Rate of interest  
$time = 3; // Time in years
$simpleInterest = ($principal * $rate * $time) / 100;
echo "Princhipal: " . $principal . "<br>";
echo "Rate: " . $rate . "<br>";
echo "Time: " . $time . "<br>";

echo "Simple Interest = ($principal * $rate * $time) / 100 = $simpleInterest <br>";

echo "<h4> Write a PHP script to swap two numbers without using a third variable. </h4>";
$a = 5;
$b = 10;
echo "Before swapping: a = $a, b = $b <br>";
$a = $a + $b; // a now becomes 15      
$b = $a - $b; // b becomes 5
$a = $a - $b; // a becomes 10
echo "After swapping: a = $a, b = $b <br>";


echo "<h4> Write a PHP script to check whether a given year is a leap year or not.
Hints: A year is a leap year if it is divisible by 4, but not divisible by 100, unless it is also divisible by 400. </h4>";
$year = 2021;
if (($year % 4 == 0 && $year % 100 != 0)    
    || ($year % 400 == 0)) {
    echo "$year is a leap year.<br>";
} else {
    echo "$year is not a leap year.<br>";
}   

echo "<h4> Write a PHP script to find the factorial of a number.
Hints: Use loop (for/while). </h4>";
$number = 5; // Number to find the factorial of
$factorial = 1; // Initialize factorial variable    
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i; // Multiply factorial by i
}
echo "Factorial of $number is $factorial.<br>";


echo "<h4> Write a PHP script to print all the prime numbers between 1 to 50 </h4>";
$start = 1;
$end = 50;
echo "Prime numbers between $start and $end are: <br>";
for ($num = $start; $num <= $end; $num++) {
    if ($num > 1) { // Check if num is greater than 1
        $isPrime = true; // Assume num is prime
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) { // Check if num is divisible by i
                $isPrime = false; // num is not prime
                break; // Exit the loop
            }
        }
        if ($isPrime) {
            echo $num . " "; // Print the prime number
        }
    }
}

echo "<br><h4> Write a PHP script to print the following patterns using nested loops:<br><h4> ";
echo"<h4> Pattern 1</h4>";
$rows = 5; // Number of rows
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*"; 
    }
    echo "<br>"; // New line after each row
}

echo"<h4> Pattern 2</h4>";
# Pattern 2</h4>";
$rows = 4; // Number of rows
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j "; // Print #
    }
    echo "<br>"; // New line after each row
}


echo "<h4> Pattern 3</h4>";
for ($i = 65; $i <= 68; $i++) { // A(65) to D(68)
    for ($j = 1; $j <= $i - 64; $j++) {
        echo chr($i) . " ";
    }
    echo "<br>";
}  
?>