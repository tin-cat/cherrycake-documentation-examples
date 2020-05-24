<?php

namespace CherrycakeApp;

class JanitorTaskMoviesUpdateImdbRating extends \Cherrycake\JanitorTask {
    protected $config = [
		"executionPeriodicity" => \Cherrycake\JANITORTASK_EXECUTION_PERIODICITY_HOURS,
		"periodicityHours" => ["00:00"]
    ];
    protected $name = "Movies update IMDB rating";
    protected $description = "Updates the IMDB rating of all the movies in the database";

    function run($baseTimestamp) {
        global $e;
        $e->loadCoreModule("Database");
        $movies = new Movies;
        foreach ($movies as $movie)
            $movie->updateImdbRating();
    }
}