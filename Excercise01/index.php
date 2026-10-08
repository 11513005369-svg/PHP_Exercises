<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$person = [
    "name" => "Pema Dorji",
    "cid" => "10701001234",
    "dob" => "15-05-2002",
    "dzongkhag" => "Thimphu",
    "gewog" => "Chang",
    "occupation" => "Teacher",
    "active" => true
];

echo "<h1>Citizen Profile</h1>";

echo "Name: " . strtoupper($person["name"]) . "<br>";
echo "CID: " . $person["cid"] . "<br>";
echo "Date of Birth: " . $person["dob"] . "<br>";
echo "Dzongkhag: " . $person["dzongkhag"] . "<br>";
echo "Gewog: " . $person["gewog"] . "<br>";
echo "Occupation: " . $person["occupation"] . "<br>";

if ($person["active"] == true) {
    echo "Status: Active<br>";
} else {
    echo "Status: Inactive<br>";
}

$cidLength = strlen($person["cid"]);

echo "CID Length: " . $cidLength . "<br>";

if ($cidLength != 11) {
    echo "Warning: CID must have exactly 11 characters.";
}

?>
</body>
</html>