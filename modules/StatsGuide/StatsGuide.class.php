<?php

namespace CherrycakeApp;

class StatsGuide extends \Cherrycake\Module {
	var $dependentCoreModules = [
        "Locale",
        "Stats"
	];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "statsGuideTriggeringEvent",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "StatsGuide",
                "methodName" => "triggeringEvent",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "stats-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "triggering-event"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "statsGuideAdditionalDimensions",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "StatsGuide",
                "methodName" => "additionalDimensions",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "stats-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "additional-dimensions"
                        ])
                    ]
                ])
            ])
        );   
    }

    function triggeringEvent() {
        global $e;

        $e->Stats->trigger(new StatsEventStatsGuideTriggeringExample);

		$statsEventItems = new \Cherrycake\StatsEvents([
            "p" => [
                "type" => "CherrycakeApp\StatsEventStatsGuideTriggeringExample",
                "limit" => 100
            ]
        ]);

		$payload = "";
		foreach ($statsEventItems as $statsEvent) {
			$payload .=
				$e->Locale->formatTimestamp($statsEvent->timestamp).
                ": ".$statsEvent->typeDescription.
                ": ".$statsEvent->count.
				"\n";
		}
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
    }

    function additionalDimensions() {
        global $e;

        $e->Stats->trigger(new StatsEventStatsGuideTriggeringExample);

		$statsEventItems = new \Cherrycake\StatsEvents([
            "p" => [
                "type" => "CherrycakeApp\StatsEventUserLogin",
                "limit" => 100
            ]
        ]);

		$payload = "";
		foreach ($statsEventItems as $statsEvent) {
            $user = new User([
                "loadMethod" => "fromId",
                "id" => $statsEvent->secondary_id
            ]);

			$payload .=
				$e->Locale->formatTimestamp($statsEvent->timestamp).
                ": ".$user->name.
                " logged in ".$statsEvent->count." times".
				"\n";
		}
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
    }
}