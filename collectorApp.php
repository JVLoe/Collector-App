<?php

require_once 'functions.php';

$connectionString = 'mysql:host=db; dbname=planetdatabase';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT `name`, `temperature`, `colour`, `size` FROM `myplanets`;';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();

$venus = $allResults[0];

$mars = $allResults[1];

$jupiter = $allResults[2];

$neptune = $allResults[3];

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
        <p><?php echo showKeyAndValue($venus); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php echo showKeyAndValue($mars); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php echo  showKeyAndValue($jupiter); ?></p>
    </section>
    <section class="planet_containers">
        <p><?php echo showKeyAndValue($neptune); ?></p>
    </section>
</main>
</body>
</html>

