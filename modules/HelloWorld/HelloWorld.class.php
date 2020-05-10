<?php

namespace CherrycakeApp;

class HelloWorld extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "Database",
        "HtmlDocument",
        "Session"
    ];

    function init() {
        if (!parent::init())
            return false;
        global $e;
        $e->Css->addFileToSet("main", "main.css");
        return true;
    }
    
    public static function mapActions() {
        global $e;
        $e->Actions->mapAction(
            "home",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "HelloWorld",
                "methodName" => "show",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "hello-world"
                        ])
                    ]
                ])
            ])
        );
    }

    function show() {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "<html><body>Hello world</body></html>"
        ]));
    }
}