<?php

namespace CherrycakeApp;

class SystemLogGuide extends \Cherrycake\Module {
	var $dependentCoreModules = [
		"SystemLog",
		"Locale"
	];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "systemLogGuideLoadingEvents",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "SystemLogGuide",
                "methodName" => "loadingEvents",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "systemlog-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "loading-events"
                        ])
                    ]
                ])
            ])
        );
    }

    function loadingEvents() {
        global $e;

		$systemLogEvents = new \Cherrycake\SystemLogEvents([
			"fillMethod" => "fromParameters",
			"p" => [
				"limit" => 50,
				"orders" => [
					"chronological" => "dateAdded desc"
				],
				"order" => ["chronological"]
			]
		]);

		$payload = "";
		foreach ($systemLogEvents as $systemLogEvent) {
			$payload .=
				"[".$e->Locale->formatTimestamp($systemLogEvent->dateAdded, ["isHours" => true, "isSeconds" => true])."] ".
				$systemLogEvent->type.
				": ".
				$systemLogEvent->description.
				"\n";
		}
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
    }
}