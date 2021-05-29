<?php

namespace CherrycakeApp\CssAndJavascriptGuide;

class CssAndJavascriptGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "HtmlDocument"
    ];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "cssAndJavascriptBasicExample",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "CssAndJavascriptGuide",
                "methodName" => "basicExample",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "css-and-javascript-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
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

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "This page has some CSS styling, the file base.css has been linked in the <u>Css.config.php</u> configuration file.".
                $e->HtmlDocument->footer()
        ]));
    }
}
