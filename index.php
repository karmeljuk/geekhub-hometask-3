<?php

namespace Tent;

include_once "vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tent\Controller;

$request = Request::createFromGlobals();

$controller = new Controller();
$response = $controller->tentTerraView();
$response->send();
