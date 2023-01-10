<?php
require_once __DIR__ . "/classes/Genre.php";
require_once __DIR__ . "/classes/Movie.php";
require_once __DIR__ . "/classes/Actor.php";

$fantasy = new Genre("fantasy");
$action = new Genre("action");
$drama = new Genre("drama");

$daisy = new Actor("Daisy", "Ridley");
$vin = new Actor("Vin", "Diesel");

$movies = [
    new Movie("Star Wars: The Rise of Skywalker", [$fantasy, $action, $drama], [$daisy], 180, "Gli ultimi membri sopravvissuti della Resistenza affrontano il Primo Ordine mentre Rey, Finn e Poe Dameron continuano il proprio viaggio. La grande battaglia conclusiva ha finalmente inizio.", "2019"),
    new Movie("Guardiani della Galassia", [$fantasy, $action], [$vin], 122, "", "2014"),
];
