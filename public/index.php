<?php

namespace CherrycakeApp;

require $_SERVER["HTTP_HOST"] == "localhost" ? "/engine/load.php" : "../vendor/tin-cat/cherrycake-engine/load.php";

$e = new \Cherrycake\Engine;

if ($e->init(__NAMESPACE__, [
    "isDevel" => $_SERVER["HTTP_HOST"] == "localhost"
]))
    $e->attendWebRequest();

// echo $e->getStatusHtml(); die;

$e->end();