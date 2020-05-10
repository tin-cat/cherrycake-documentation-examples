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
            "passingVariables",
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
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "nestedPatterns",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "PatternsGuide",
                "methodName" => "nestedPatterns",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "patterns-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "nested-patterns"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "cachedPatterns",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "PatternsGuide",
                "methodName" => "cachedPatterns",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "patterns-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "cached-patterns"
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

    function nestedPatterns() {
        global $e;
        $e->Patterns->out("PatternsGuide/NestedPatterns.html", [
            "variables" => [
                "emoji" => "🧁"
            ]
        ]);
    }

    function cachedPatterns() {
        global $e;
        $e->Patterns->out("PatternsGuide/CachedPattern.html");
    }
}