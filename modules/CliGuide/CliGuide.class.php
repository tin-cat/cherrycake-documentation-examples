<?php

namespace CherrycakeApp;

class CliGuide extends \Cherrycake\Module {
    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "cliGuideSimple",
            new \Cherrycake\ActionCli([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CliGuide",
                "methodName" => "simple"
            ])
        );

        $e->Actions->mapAction(
            "cliGuideParameters",
            new \Cherrycake\ActionCli([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CliGuide",
                "methodName" => "parameters",
                "request" => new \Cherrycake\Request([
                    "parameters" => [
                        new \Cherrycake\RequestParameter([
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_CLI,
                            "name" => "userId",
                            "securityRules" => [
                                \Cherrycake\SECURITY_RULE_TYPICAL_ID
                            ]
                        ])
                    ]
                ])
            ])
        );
    }

    function simple() {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseCli([
            "payload" => "Hello World from the Cli interface"
        ]));
    }

    function parameters($request) {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseCli([
            "payload" => "Parameter userId: ".$request->userId
        ]));
    }
}