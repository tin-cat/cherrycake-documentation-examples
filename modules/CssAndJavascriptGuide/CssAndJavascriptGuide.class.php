<?php

namespace CherrycakeApp;

class CssAndJavascriptGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "HtmlDocument"
    ];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "cssAndJavascriptBasicExample",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CssAndJavascriptGuide",
                "methodName" => "basicExample",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "css-and-javascript-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "basic-example"
                        ])
                    ]
                ])
            ])
        );
    }

    function basicExample() {
        global $e;

        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "This page has some CSS styling, the file base.css has been linked in the <code>Css.config.php</code> configuration file.".
                $e->HtmlDocument->footer()
        ]));
    }
}