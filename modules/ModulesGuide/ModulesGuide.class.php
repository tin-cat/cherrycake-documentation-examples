<?php

namespace CherrycakeApp;

class ModulesGuide extends \Cherrycake\Module {
    protected $isConfigFile = true;
    protected $config = [
        "title" => "The default value for the title configuration",
        "description" => "The default value for the description configuration"
    ];
    
    public static function mapActions() {
        global $e;
        $e->Actions->mapAction(
            "modulesGuideConfigurationFile",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ModulesGuide",
                "methodName" => "configurationFile",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "modules-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "configuration-file"
                        ])
                    ]
                ])
            ])
        );
    }

    function configurationFile() {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "
                <html><body>
                    <h1>".$this->getConfig("title")."</h1>
                    <p>".$this->getConfig("description")."</p>
                </body></html>
            "
        ]));
    }
}