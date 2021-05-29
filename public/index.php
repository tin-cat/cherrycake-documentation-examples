<?php

namespace CherrycakeApp;

require "../vendor/autoload.php";

$e = new \Cherrycake\Engine;

if ($e->init(__NAMESPACE__, [
	"isDevel" => true,
	"additionalAppConfigFiles" => [
		"App.config.php"
	]
]))
	$e->attendWebRequest();

$e->end();
