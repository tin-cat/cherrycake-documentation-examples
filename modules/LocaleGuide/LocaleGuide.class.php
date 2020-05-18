<?php

namespace CherrycakeApp;

class LocaleGuide extends \Cherrycake\Module {
	protected $dependentCoreModules = [
        "Locale"
    ];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "localeGuideBasic",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LocaleGuide",
                "methodName" => "basic",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "locale-guide"
                        ]),
						new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "basic"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "localeGuideMultilingualTexts",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LocaleGuide",
                "methodName" => "multilingualTexts",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "locale-guide"
                        ]),
						new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "multilingual-texts"
                        ])
                    ]
                ])
            ])
        );

		$e->Actions->mapAction(
            "localeGuideVariablesInMultilingualTexts",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "LocaleGuide",
                "methodName" => "variablesInMultilingualTexts",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "locale-guide"
                        ]),
						new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "variables-in-multilingual-texts"
                        ])
                    ]
                ])
            ])
        );
    }

    function basic() {
        global $e;

		$payload = $e->Locale->formatTimestamp(time())."\n";
		$payload .= $e->Locale->formatCurrency(19.5)."\n";
		$payload .= $e->Locale->getTimeZoneName()."\n\n";

		$e->Locale->setLocale("spain");

		$payload .= $e->Locale->formatTimestamp(time())."\n";
		$payload .= $e->Locale->formatCurrency(19.5)."\n";
		$payload .= $e->Locale->getTimeZoneName()."\n";

        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
    }

	function multilingualTexts() {
        global $e;

		$payload = $e->Locale->getText("general/test")."\n";
		$e->Locale->setLocale("spain");
		$payload .= $e->Locale->getText("general/test");

        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
    }

	function variablesInMultilingualTexts() {
		global $e;

		$payload = $e->Locale->getText("general/newMessages", [
			"variables" => [
				"numberOfMessages" => 5
			]
		])."\n";

		$e->Locale->setLocale("spain");

		$payload .= $e->Locale->getText("general/newMessages", [
			"variables" => [
				"numberOfMessages" => 5
			]
		]);

        $e->Output->setResponse(new \Cherrycake\ResponseTextPlain([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => $payload
        ]));
	}
}