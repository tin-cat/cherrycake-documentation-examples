<?php

namespace CherrycakeApp;

class PatternsGuide extends \Cherrycake\Module {
    protected $isConfigFile = true;

    protected $dependentCoreModules = [
        "Patterns"
    ];

    public static function mapActions() {
        global $e;        
        $e->Actions->mapAction(
            "testHome",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "PatternsGuide",
                "methodName" => "passingVariables",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "patterns-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "passing-variables"
                        ])
                    ],
                    "parameters" => [
                        new \Cherrycake\RequestParameter([
                            "name" => "id",
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_GET,
                            "securityRules" => [
                                \Cherrycake\SECURITY_RULE_TYPICAL_ID
                            ]
                        ])
                    ]
                ])
            ])
        );
    }

    function passingVariables() {
        global $e;
        $e->Patterns->out("PatternsGuide/PassingVariables.html", [
            "variables" => [
                "emoji" => "🧸"
            ]
        ]);
    }
}