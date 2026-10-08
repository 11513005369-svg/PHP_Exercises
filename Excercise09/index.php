<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$records = [

    ["name" => "Pema", "dzongkhag" => "Thimphu", "age" => 24, "status" => "Active", "type" => "Citizen"],

    ["name" => "Karma", "dzongkhag" => "Paro", "age" => 31, "status" => "Active", "type" => "Citizen"],

    ["name" => "Sonam", "dzongkhag" => "Punakha", "age" => 65, "status" => "Inactive", "type" => "Senior"],

    ["name" => "Tashi", "dzongkhag" => "Thimphu", "age" => 28, "status" => "Active", "type" => "Citizen"],

    ["name" => "Dechen", "dzongkhag" => "Paro", "age" => 35, "status" => "Active", "type" => "Resident"],

    ["name" => "Wangmo", "dzongkhag" => "Punakha", "age" => 52, "status" => "Inactive", "type" => "Resident"],

    ["name" => "Dorji", "dzongkhag" => "Thimphu", "age" => 41, "status" => "Active", "type" => "Citizen"],

    ["name" => "Choden", "dzongkhag" => "Paro", "age" => 22, "status" => "Active", "type" => "Resident"],

    ["name" => "Deki", "dzongkhag" => "Thimphu", "age" => 70, "status" => "Active", "type" => "Senior"],

    ["name" => "Tandin", "dzongkhag" => "Punakha", "age" => 19, "status" => "Inactive", "type" => "Citizen"]
];

echo "<h1>B-PIS Report</h1>";

echo "Total Records: " . count($records) . "<br><br>";

$active = 0;
$inactive = 0;
$adults = 0;
$seniors = 0;

$dzongkhags = [];
$types = [];

foreach ($records as $record) {

    // Status
    if ($record["status"] == "Active") {
        $active++;
    } else {
        $inactive++;
    }

    // Age
    if ($record["age"] >= 18 && $record["age"] < 60) {
        $adults++;
    }

    if ($record["age"] >= 60) {
        $seniors++;
    }

    // Dzongkhag
    $place = $record["dzongkhag"];

    if (isset($dzongkhags[$place])) {
        $dzongkhags[$place]++;
    } else {
        $dzongkhags[$place] = 1;
    }

    // Type
    $type = $record["type"];

    if (isset($types[$type])) {
        $types[$type]++;
    } else {
        $types[$type] = 1;
    }
}

$activePercentage = ($active / count($records)) * 100;

echo "Active: $active<br>";
echo "Inactive: $inactive<br>";
echo "Adults: $adults<br>";
echo "Senior Citizens: $seniors<br>";
echo "Active Percentage: " . number_format($activePercentage, 2) . "%<br>";

echo "<h2>Dzongkhag</h2>";

foreach ($dzongkhags as $place => $number) {
    echo "$place: $number<br>";
}

echo "<h2>Record Types</h2>";

foreach ($types as $type => $number) {
    echo "$type: $number<br>";
}

?>
</body>
</html>