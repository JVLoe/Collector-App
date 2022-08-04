<?php

$connectionString = 'mysql:host=db; dbname=planetdatabase';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT `name`, `temperature`, `colour`, `size` FROM `myplanets`;';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();

//print_r($allResults);
//print_r($allResults[0]);

$venus = $allResults[0];

//echo implode("<br>",$venus);

$mars = $allResults[1];

//print_r($mars['temperature']);

$jupiter = $allResults[2];

$neptune = $allResults[3];


function changeArrayKeys($array){
    foreach($array as $key => $value) {
        echo "<p>$key: $value</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System</title>
    <link rel="stylesheet" type="text/css" href="collector.css">
</head>
<body>
<header>
    <div class="header_container">
        <h1>Solar System</h1>
    </div>
</header>
<main>
    <section class="planet_containers">
        <p><?php changeArrayKeys($venus); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php changeArrayKeys($mars); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php changeArrayKeys($jupiter); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php changeArrayKeys($neptune); ?></p>
    </section>
</main>
</body>
</html>

