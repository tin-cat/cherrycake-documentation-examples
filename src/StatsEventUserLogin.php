<?php

namespace CherrycakeApp;

class StatsEventUserLogin extends \Cherrycake\Stats\StatsEvent {
    protected $timeResolution = \Cherrycake\Stats\STATS_EVENT_TIME_RESOLUTION_DAY;
    protected $typeDescription = "User login";
    protected $isSecondaryId = true;
    protected $secondaryIdDescription = "User id";

    function loadInline($data = false) {
        if ($data["userId"] ?? false)
            $this->secondary_id = $data["userId"];
        return parent::loadInline($data);
    }
}
