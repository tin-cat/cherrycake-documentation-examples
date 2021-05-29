<?php

namespace CherrycakeApp\CliGuide;

class CliGuide extends \Cherrycake\Module {
    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "cliGuideSimple",
            new \Cherrycake\Actions\ActionCli([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CliGuide",
                "methodName" => "simple"
            ])
        );

        $e->Actions->mapAction(
            "cliGuideParameters",
            new \Cherrycake\Actions\ActionCli([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CliGuide",
                "methodName" => "parameters",
                "request" => new \Cherrycake\Actions\Request([
                    "parameters" => [
                        new \Cherrycake\Actions\RequestParameter([
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
        $e->Output->setResponse(new \Cherrycake\Actions\ResponseCli([
            "payload" => "Hello World from the Cli interface"
        ]));
    }

    function parameters($request) {
        global $e;
        $e->Output->setResponse(new \Cherrycake\Actions\ResponseCli([
            "payload" => "Parameter userId: ".$request->userId
        ]));
    }
}
