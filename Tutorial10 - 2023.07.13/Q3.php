<html>
<?php
function calculateElectricityBill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 3.50;
    } elseif ($units <= 100) {
        $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $totalBill;
}

// Example usage:
$unitsConsumed = 125;
$billAmount = calculateElectricityBill($unitsConsumed);
echo "Electricity bill for $unitsConsumed units: Rs. " . $billAmount;
?>
</html>
