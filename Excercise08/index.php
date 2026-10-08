<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$permissions = [

    "administrator" => [
        "create",
        "read",
        "update",
        "delete",
        "export"
    ],

    "data officer" => [
        "create",
        "read",
        "update"
    ],

    "viewer" => [
        "read"
    ]
];

function canPerform($role, $action)
{
    global $permissions;

    $role = strtolower($role);
    $action = strtolower($action);

    if (!isset($permissions[$role])) {
        return false;
    }

    return in_array($action, $permissions[$role]);
}


$role = "Data Officer";
$action = "update";

echo "<h1>Permission Checker</h1>";

if (canPerform($role, $action)) {

    echo "$role can perform $action.";

} else {

    echo "$role cannot perform $action.";
}

?>
</body>
</html>