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

$jupiter = $allResults[2];

$neptune = $allResults[3];

function showPlanet($planet){
    return $planet;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial System</title>
    <link rel=stylesheet type="text/css" href="normalize.css">
    <link rel=stylesheet type="text/css" href="collectorApp.css">
    <script src="https://kit.fontawesome.com/14c42a68eb.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="header">
        <p>Celestial System</p>
    </div>
</header>
<main>
    <section>
        <p><?php echo implode("<br>",$venus);; ?></p>

    </section>
    <section>
        <p><?php echo implode("<br>",$mars);; ?></p>
    </section>
    <section>
        <p><?php echo implode("<br>",$jupiter);; ?></p>
    </section>
    <section>
        <p><?php echo implode("<br>",$neptune);; ?></p>
    </section>
</main>
</body>
</html>

