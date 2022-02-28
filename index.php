<?php
require_once __DIR__ . '/classes/Movie.php';
$amelie = new Movie("Le Fabuleux Destin d'Amélie Poulain", ["comedy", "romance"]);
$peppa = new Movie("Peppa Pig", ["cartoon"]);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php
    echo $amelie->getInfo();
    echo $peppa->getInfo();
    ?>
</body>

</html>