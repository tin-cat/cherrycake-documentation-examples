<?php

namespace CherrycakeApp\MovieSearchLog;

class MovieSearchLog extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "Database",
        "Locale"
    ];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "movieSearchLog",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "MovieSearchLog",
                "methodName" => "viewLog",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "movie-search-log"
                        ])
                    ]
                ])
            ])
        );
    }

    function viewLog() {
        global $e;

        $logEvents = new \Cherrycake\Log\LogEvents([
			"p" => [
				"limit" => 50
			]
        ]);

		$payload = "";
		foreach ($logEvents as $logEvent) {
            $payload .=
				"[".$e->Locale->formatTimestamp($logEvent->timestamp, ["isHours" => true, "isSeconds" => true])."] ".
				$logEvent->type.
                ": ".
                $logEvent->additionalData["movieTitle"].
				"\n";
		}

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextPlain([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => $payload
        ]));
    }
}
