<?php

namespace Tent;

include_once "vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tent\Controller;

$request = Request::createFromGlobals();

$response = new Controller();
$response -> tentTerraView();
