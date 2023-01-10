<?php
require_once __DIR__ . "/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>Lista film preferiti samu</h1>
    <ul>
        <?php foreach( $movies as $movie ) { ?>
        <li>
            <h3><?= $movie->title; ?></h3>
            <h4>Durata: <?php echo $movie->duration; ?>min</h4>
            <h5>Generi:</h5>
            <ul>
                <?php foreach( $movie->genres as $genre ) { ?>
                <li><?php echo ucfirst($genre->name); ?></li>
                <?php } ?>
            </ul>
            <h5>Attori:</h5>
            <ul>
                <?php foreach( $movie->actors as $actor ) { ?>
                <li><?php echo ucfirst($actor->firstName); ?> <?php echo ucfirst($actor->lastName); ?></li>
                <?php } ?>
            </ul>
            <p>
                <?php echo $movie->plot; ?>
            </p>
        </li>
        <?php } ?>
    </ul>
</body>
</html>