<?php

namespace CherrycakeApp\SessionGuide;

class SessionGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "HtmlDocument",
        "Session"
    ];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "sessionGuideExample",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "SessionGuide",
                "methodName" => "example",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "session-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "example"
                        ])
                    ]
                ])
            ])
        );
    }

    function example() {
        global $e;

        $e->Session->numberOfTimesViewed ++;

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "You've seen this page {$e->Session->numberOfTimesViewed} times".
                $e->HtmlDocument->footer()
        ]));
    }
}
