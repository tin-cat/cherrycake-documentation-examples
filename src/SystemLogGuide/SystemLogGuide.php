<?php

namespace CherrycakeApp\SystemLogGuide;

class SystemLogGuide extends \Cherrycake\Module {
	var $dependentCoreModules = [
		"SystemLog",
		"Locale"
	];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "systemLogGuideLoadingEvents",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "SystemLogGuide",
                "methodName" => "loadingEvents",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "systemlog-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
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

		$systemLogEvents = new \Cherrycake\SystemLog\SystemLogEvents([
			"p" => [
				"limit" => 50
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

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextPlain([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => $payload
        ]));
    }
}
