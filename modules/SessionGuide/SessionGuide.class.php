<?php

namespace CherrycakeApp;

class SessionGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "HtmlDocument",
        "Session"
    ];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "sessionGuideExample",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "SessionGuide",
                "methodName" => "example",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "session-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
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
    
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "You've seen this page {$e->Session->numberOfTimesViewed} times".
                $e->HtmlDocument->footer()
        ]));
    }
}