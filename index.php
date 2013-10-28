<?php

include 'autoload.php';

$TerraNovaSolarCompetition2 = new TentTerraNova(array(
    "capacity" => "2",
    "weight" => "3.17kg",
    "type" => "cupol",
    "reviews" => "Good tent",
    "price" => "3655 UAH",
    ));

$TerraNovaSolarCompetition2 -> print_data();
$TerraNovaSolarCompetition2 -> rating(3);
$TerraNovaSolarCompetition2 -> print_data();

$CampusAlmeria2 = new TentCampus(array(
    "capacity" => "2",
    "weight" => "3.2kg",
    "type" => "tube",
    "reviews" => "Good tent",
    "price" => "799 UAH",
    ));

$CampusAlmeria2 -> print_data();
$CampusAlmeria2 -> rating(4);
$CampusAlmeria2 -> print_data();

$TrimmAlfa = new TentTrimm(array(
    "capacity" => "2-3",
    "weight" => "2.8kg",
    "type" => "cupol",
    "reviews" => "Good tent",
    "price" => "908 UAH",
));

$TrimmAlfa -> print_data();
