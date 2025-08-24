<?php
//Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount
$amount = 100; 
$vatRate = 0.15;
function calculateVat($amount, $vatRate) {
    
    $vat = $amount * $vatRate;
    $totalAmount = $amount + $vat;

    echo "Original Amount: $amount <br>";
    echo "VAT (15%): $vat <br>";
    echo "Total Amount including VAT:  Amount+VAT = $totalAmount";
}
echo calculateVat($amount, $vatRate);
?>