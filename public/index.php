<?php

namespace CherrycakeApp;

require "/engine/load.php";

$e = new \Cherrycake\Engine;

if ($e->init(__NAMESPACE__, [
    "isDevel" => true
]))
    $e->attendWebRequest();

// echo $e->getStatusHtml(); die;

$e->end();