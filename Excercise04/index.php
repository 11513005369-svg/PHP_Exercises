<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$requests = [
    "Thimphu",
    "Paro",
    "Thimphu",
    "Punakha",
    "Paro",
    "Thimphu"
];

echo "<h1>Service Requests</h1>";

echo "<h2>All Requests</h2>";

foreach ($requests as $number => $place) {
    echo "Request " . ($number + 1) . ": $place<br>";
}

$counts = [];

foreach ($requests as $place) {

    if (isset($counts[$place])) {
        $counts[$place]++;
    } else {
        $counts[$place] = 1;
    }
}

echo "<h2>Request Count</h2>";

foreach ($counts as $place => $number) {
    echo "$place: $number<br>";
}

$highestPlace = "";
$highestNumber = 0;

foreach ($counts as $place => $number) {

    if ($number > $highestNumber) {
        $highestNumber = $number;
        $highestPlace = $place;
    }
}

echo "<br>Highest Requests: $highestPlace<br>";
echo "Total Requests: " . count($requests) . "<br>";

$thimphu = $counts["Thimphu"];

$percentage = ($thimphu / count($requests)) * 100;

echo "Thimphu Percentage: " . $percentage . "%";

?>
</body>
</html>