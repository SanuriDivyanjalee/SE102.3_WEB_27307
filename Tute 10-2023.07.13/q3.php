<?php
$unitsConsumed = 150; 
$totalBillAmount = 0;

if ($unitsConsumed <= 50) {
$totalBillAmount = $unitsConsumed * 3.50;
} elseif ($unitsConsumed <= 100) {
$totalBillAmount = (50 * 3.50) + (($unitsConsumed - 50) * 4.00);
} elseif ($unitsConsumed <= 150) {
$totalBillAmount = (50 * 3.50) + (50 * 4.00) + (($unitsConsumed - 100) * 5.20);
} else {
$totalBillAmount = (50 * 3.50) + (50 * 4.00) + (50 * 5.20) + (($unitsConsumed - 150) * 6.50);
}

echo "Total Bill Amount: Rs." . $totalBillAmount;
?>