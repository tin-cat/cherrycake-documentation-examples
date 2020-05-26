<?php

namespace CherrycakeApp;

class LogEventMovieSearch extends \Cherrycake\LogEvent {
    protected $typeDescription = "Movie search";
    protected $outherIdDescription = "Logged user id";
    
    function loadInline($movieTitle = false) {
        global $e;
        $e->loadCoreModule("Login");
        return parent::loadInline([
            "outher_id" => $e->Login->isLogged() ? $e->Login->user->id : false,
            "additionalData" => [
                "movieTitle" => $movieTitle
            ]
        ]);
    }
}