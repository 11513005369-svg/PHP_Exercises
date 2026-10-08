<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$members = [
    "Pema",
    "Karma",
    "Sonam",
    "Tashi",
    "Dechen",
    "Wangmo"
];

echo "<h1>Household Members</h1>";

echo "<ol>";

foreach ($members as $member) {
    echo "<li>$member - " . strlen($member) . " characters</li>";
}

echo "</ol>";

echo "Total Members: " . count($members) . "<br>";

echo "First Member: " . $members[0] . "<br>";

echo "Last Member: " . $members[count($members) - 1] . "<br>";

$shortest = $members[0];
$longest = $members[0];

foreach ($members as $member) {

    if (strlen($member) < strlen($shortest)) {
        $shortest = $member;
    }

    if (strlen($member) > strlen($longest)) {
        $longest = $member;
    }
}

echo "Shortest Name: $shortest<br>";
echo "Longest Name: $longest<br>";

?>
</body>
</html>