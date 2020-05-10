<?php

namespace CherrycakeApp;

class HelloWorld extends \Cherrycake\Module {
    public static function mapActions() {
        global $e;
        $e->Actions->mapAction(
            "helloWorld",
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