<?php

namespace Tent;

include_once "vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tent\Controller;

$request = Request::createFromGlobals();
//$uri = $request->getPathInfo();

$response = new Controller();
$response->tentView();
var_dump($response);

/*
$CampusAlmeria2 = new TentCampus(array(
    "capacity" => "2",
    "weight" => "3.2kg",
    "type" => "tube",
    "reviews" => "Good tent",
    "price" => "799 UAH",
    ));

$CampusAlmeria2 -> print_data();
$CampusAlmeria2 -> raiting(4);
$CampusAlmeria2 -> print_data();

$TrimmAlfa = new TentTrimm(array(
    "capacity" => "2-3",
    "weight" => "2.8kg",
    "type" => "cupol",
    "reviews" => "Good tent",
    "price" => "908 UAH",
));

$TrimmAlfa -> print_data();
*/