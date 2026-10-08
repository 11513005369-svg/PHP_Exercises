<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$name = "Karma Wangchuk";
$age = 24;

function checkAge($age)
{
    if ($age < 0 || $age > 120) {
        return "Invalid age";
    }

    if ($age < 13) {
        return "Child";
    }

    if ($age <= 17) {
        return "Teenager";
    }

    if ($age <= 59) {
        return "Adult";
    }

    return "Senior Citizen";
}

$group = checkAge($age);

echo "<h1>Age Check</h1>";

echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Age Group: $group<br>";

if ($group == "Adult" || $group == "Senior Citizen") {
    echo "Service: Eligible<br>";
    echo "Explanation: The person is 18 or older.";
} elseif ($group == "Invalid age") {
    echo "Service: Not Eligible<br>";
    echo "Explanation: Age is invalid.";
} else {
    echo "Service: Not Eligible<br>";
    echo "Explanation: The service is only for adults.";
}

?>
</body>
</html>