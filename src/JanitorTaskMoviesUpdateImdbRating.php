<?php

namespace CherrycakeApp;

class JanitorTaskMoviesUpdateImdbRating extends \Cherrycake\JanitorTask {
    protected $isConfigFile = true;

    protected $name = "Movies update IMDB rating";
    protected $description = "Updates the IMDB rating of all the movies in the database";

    protected $config = [
      "executionPeriodicity" => \Cherrycake\JANITORTASK_EXECUTION_PERIODICITY_HOURS,
      "periodicityHours" => ["00:00"]
    ];

    function run($baseTimestamp) {
        global $e;
		$e->loadCoreModule("Database");

		$movies = new CherrycakeApp\Movies([
			"fillMethod" => "fromParameters"
		]);
        foreach ($movies as $movie) {
			$movie->updateImdbRating();
		}

        return [
			\Cherrycake\JANITORTASK_EXECUTION_RETURN_OK,
			$movies->count()." movies updated"
        ];
    }
}
