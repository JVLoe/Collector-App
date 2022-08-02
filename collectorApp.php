<?php

$connectionString = 'mysql:host=db; dbname=planetdatabase';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$queryString = 'SELECT * FROM `myplanets`;';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();
$firstResult = $query->fetch();

print_r($allResults);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Celestial System</title>
</head>
<body>
<p>Hello</p>
</body>
</html>

