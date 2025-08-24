<?php
//6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY

// $elements = array("apple", "banana", "orange", "grape", "mango");
// $searchElement = "banana";   
// function searchElementInArray($elements, $searchElement) {
//     foreach ($elements as $element) {
//         if ($element === $searchElement) {
//             return "$searchElement found in the array.";
//         }
//     }
//     return "$searchElement not found in the array.";
// }
// echo searchElementInArray($elements, $searchElement);


// function searchElementInArray($elements, $searchElement) {
//     $found = false;
//     foreach ($elements as $element) {
//         if ($element === $searchElement) {
//             $found = true;
//             break;
//         }
//     }
//     if ($found) {
//         return "$searchElement found in the array.";
//     } else {
//         return "$searchElement not found in the array.";
//     }
// }
// $elements = array("apple", "banana", "orange", "grape", "mango");
// $searchElement = "baana";
// echo searchElementInArray($elements, $searchElement);

$numbers = [10, 20, 30, 40, 50];
function searchElement($array, $element) {
    if (in_array($element, $array)) {
        echo "Element $element found in the array.<br>";
    } else {
        echo "Element $element not found in the array.<br>";
    }
}
searchElement($numbers, 30);
searchElement($numbers, 60);

?>