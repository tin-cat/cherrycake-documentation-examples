<?php

/**
 * Cherrycake Skeleton
 * Cli php file
 *
 * @copyright Tin.cat 2014
 */

namespace CherrycakeApp;

chdir(dirname(__FILE__));

// Include the cherrycake loader script
require defined("STDIN") || $_SERVER["HTTP_HOST"] == "localhost" ? "/engine/load.php" : "../vendor/tin-cat/cherrycake-engine/load.php";

// Creates a cherrycake engine
$e = new \Cherrycake\Engine;

// Inits the engine and runs the App if initting has gone ok.
if ($e->init(__NAMESPACE__, [
    "isDevel" => defined("STDIN") || $_SERVER["HTTP_HOST"] == "localhost"
]))
	$e->attendCliRequest();

// Ends the engine
$e->end();