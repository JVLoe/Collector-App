<?php

$connectionString = 'mysql:host=db; dbname=planetdatabase';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `myplanets`;';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();

print_r($allResults);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Celestial System</title>
</head>
<body>

</body>
</html>

