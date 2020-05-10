<?php

namespace CherrycakeApp;

class ActionsGuide extends \Cherrycake\Module {
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
            "variablePathComponents",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ActionsGuide",
                "methodName" => "viewProduct",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "actions-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "product"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC,
                            "name" => "productId",
                            "securityRules" => [
                                \Cherrycake\SECURITY_RULE_NOT_EMPTY,
                                \Cherrycake\SECURITY_RULE_INTEGER,
                                \Cherrycake\SECURITY_RULE_POSITIVE
                            ]
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "acceptGetOrPostParameters",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ActionsGuide",
                "methodName" => "viewUser",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "actions-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "user"
                        ])
                    ],
                    "parameters" => [
                        new \Cherrycake\RequestParameter([
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_GET,
                            "name" => "userId",
                            "securityRules" => [
                                \Cherrycake\SECURITY_RULE_TYPICAL_ID
                            ]
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "cachedAction",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ActionsGuide",
                "methodName" => "cachedAction",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "actions-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "cached-action"
                        ])
                    ]
                ]),
                "isCache" => true,
                "cacheTtl" => \Cherrycake\CACHE_TTL_1_MINUTE
            ])
        );

    }

    function viewProduct($request) {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "The requested product id is ".$request->productId
        ]));
    }

    function viewUser($request) {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "The requested user id ".$request->userId
        ]));
    }

    function cachedAction() {
        global $e;
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "This is a cached action. The time now is ".date("H:i:s")
        ]));
    }
}