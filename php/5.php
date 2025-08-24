<?php
//5. Write a PHP script to print all the even numbers between 10 to 100 Hints: use LOOP & IF-ELSE
// function printEvenNumbers($start, $end) {
//     for ($i = $start; $i <= $end; $i++) {
//         if ($i % 2 == 0) {
//             echo "$i ";
//         }
//     }
// }
// echo printEvenNumbers(10, 100);

//5. Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE
function printOddNum(){
    for($i=10; $i<=100; $i++){
        if ($i % 2 !=0){
            echo "$i ";
        }
    }
}
echo printOddNum();
?>