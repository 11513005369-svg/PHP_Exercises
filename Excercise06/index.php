<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function validateProfile($profile)
{
    $errors = [];

    if (empty($profile["name"])) {
        $errors[] = "Name is required.";
    }

    if (strlen($profile["name"]) < 3) {
        $errors[] = "Name must have at least 3 characters.";
    }

    if ($profile["age"] < 0 || $profile["age"] > 120) {
        $errors[] = "Age must be between 0 and 120.";
    }

    if (empty($profile["dzongkhag"])) {
        $errors[] = "Dzongkhag is required.";
    }

    if (strlen($profile["cid"]) != 11) {
        $errors[] = "CID must have exactly 11 characters.";
    }

    if (
        $profile["status"] != "Active" &&
        $profile["status"] != "Inactive"
    ) {
        $errors[] = "Status must be Active or Inactive.";
    }

    return $errors;
}


// Valid profile
$profile1 = [
    "name" => "Pema Dorji",
    "age" => 24,
    "dzongkhag" => "Thimphu",
    "cid" => "10701001234",
    "status" => "Active"
];


// Invalid profile
$profile2 = [
    "name" => "",
    "age" => 150,
    "dzongkhag" => "",
    "cid" => "123",
    "status" => "Unknown"
];

echo "<h1>Profile Validation</h1>";

$result = validateProfile($profile1);

if (count($result) == 0) {
    echo "<h2>Profile 1</h2>";
    echo "Profile is valid.";
}

echo "<h2>Profile 2</h2>";

$result = validateProfile($profile2);

foreach ($result as $error) {
    echo $error . "<br>";
}

?>
</body>
</html>