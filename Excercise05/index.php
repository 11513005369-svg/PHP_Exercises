<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$profiles = [

    [
        "name" => "Pema Dorji",
        "dzongkhag" => "Thimphu",
        "age" => 24,
        "status" => "Active"
    ],

    [
        "name" => "Karma Wangchuk",
        "dzongkhag" => "Paro",
        "age" => 31,
        "status" => "Active"
    ],

    [
        "name" => "Sonam Dorji",
        "dzongkhag" => "Punakha",
        "age" => 45,
        "status" => "Inactive"
    ],

    [
        "name" => "Tashi Dorji",
        "dzongkhag" => "Thimphu",
        "age" => 28,
        "status" => "Active"
    ],

    [
        "name" => "Pema Wangmo",
        "dzongkhag" => "Paro",
        "age" => 35,
        "status" => "Active"
    ],

    [
        "name" => "Dechen Wangdi",
        "dzongkhag" => "Punakha",
        "age" => 52,
        "status" => "Inactive"
    ],

    [
        "name" => "Karma Dorji",
        "dzongkhag" => "Thimphu",
        "age" => 41,
        "status" => "Active"
    ],

    [
        "name" => "Sonam Choden",
        "dzongkhag" => "Paro",
        "age" => 22,
        "status" => "Active"
    ]
];

$search = "pema";

echo "<h1>B-PIS Search</h1>";

echo "<h2>All Profiles</h2>";

foreach ($profiles as $profile) {

    echo $profile["name"];
    echo " - ";
    echo $profile["dzongkhag"];
    echo " - ";
    echo $profile["status"];
    echo "<br>";
}

echo "<h2>Search Results</h2>";

$found = 0;

foreach ($profiles as $profile) {

    if (stripos($profile["name"], $search) !== false) {

        echo $profile["name"] . "<br>";

        $found++;
    }
}

echo "<br>Number of Matches: $found<br>";

if ($found == 0) {
    echo "No matching records found.";
}

?>
</body>
</html>