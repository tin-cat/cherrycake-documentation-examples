<?php

namespace CherrycakeApp;

class DatabaseGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "Database"
    ];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "databaseGuideBasicQueries",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "DatabaseGuide",
                "methodName" => "basicQueries",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "database-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "basic-queries"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "databaseGuideCachedQueries",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "DatabaseGuide",
                "methodName" => "cachedQueries",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "database-guide"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "cached-queries"
                        ])
                    ]
                ])
            ])
        );
    }

    function basicQueries() {
        global $e;

        $result = $e->Database->main->query("select * from users");

        $html = "";
        while ($row = $result->getRow()) {
            $html .= $row->getField("name")."<br>";
        }
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function cachedQueries() {
        global $e;

        $result = $e->Database->main->queryCache(
            "select * from users order by rand()",
            \Cherrycake\CACHE_TTL_1_MINUTE
        );

        $html = "";
        while ($row = $result->getRow()) {
            $html .= $row->getField("name")."<br>";
        }
        
        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }
}