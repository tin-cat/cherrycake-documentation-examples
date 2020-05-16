<?php

namespace CherrycakeApp;

$isDevel = $_SERVER["HTTP_HOST"] == "localhost";

require $isDevel ? "/engine/load.php" : "../vendor/tin-cat/cherrycake-engine/load.php";

$e = new \Cherrycake\Engine;

if ($e->init(__NAMESPACE__, [
    "isDevel" => $isDevel
]))
    $e->attendWebRequest();

// echo $e->getStatusHtml(); die;

$e->end();