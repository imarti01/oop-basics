<?php

require_once("./modules/cerealClass.php");
require_once("./modules/seedClass.php");
require_once("./modules/seedingClass.php");


$wheat = new Seed("Wheat", "Winter", "LG", "Volley", 10);

echo $wheat->printInfoSeed();
echo $wheat->printInfoSowing();
echo $wheat->calculateTimeToHarvest();

$wheatSeeding = new SeedingType("Wheat", "Winter", "LG", "Volley", 10);
$wheatSeeding->setSowingMonth(11);

echo $wheatSeeding->printInfoSeed();
echo $wheatSeeding->printInfoSeeding();
