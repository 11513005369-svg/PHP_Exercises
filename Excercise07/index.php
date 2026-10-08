<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$fees = [
    "Certificate" => 100,
    "Verification" => 50,
    "Replacement" => 200,
    "Correction" => 75
];

$service = "Certificate";
$quantity = 5;

echo "<h1>Service Fee Calculator</h1>";

if (!isset($fees[$service])) {

    echo "Error: Unknown service.";

} elseif ($quantity < 1) {

    echo "Error: Quantity must be at least 1.";

} else {

    $unitPrice = $fees[$service];

    $cost = $unitPrice * $quantity;

    $discount = 0;

    if ($quantity >= 5) {
        $discount = $cost * 0.10;
    }

    $processing = 20;

    $final = $cost - $discount + $processing;

    echo "Service: $service<br>";
    echo "Unit Price: Nu. " . number_format($unitPrice, 2) . "<br>";
    echo "Quantity: $quantity<br>";
    echo "Cost: Nu. " . number_format($cost, 2) . "<br>";
    echo "Discount: Nu. " . number_format($discount, 2) . "<br>";
    echo "Processing Charge: Nu. " . number_format($processing, 2) . "<br>";
    echo "Final Amount: Nu. " . number_format($final, 2);
}

?>
</body>
</html>