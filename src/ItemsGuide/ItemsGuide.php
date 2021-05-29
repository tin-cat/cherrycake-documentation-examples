<?php

namespace CherrycakeApp\ItemsGuide;
use CherrycakeApp\Movie;
use CherrycakeApp\Movies;

class ItemsGuide extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "Database",
        "Patterns"
    ];

    public static function mapActions() {
        global $e;

        $e->Actions->mapAction(
            "itemsGuideBasicUsage",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "basicUsage",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "basic-usage"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideItemLists",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "itemLists",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "item-lists"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideIterate",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "iterate",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "iterate"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideIterateInPattern",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "iterateInPattern",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "iterate-in-pattern"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideCustomFilters",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "customFilters",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "custom-filters"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideCustomOrdering",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "customOrdering",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "custom-ordering"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideFiltersAndOrdering",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "filtersAndOrdering",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "filters-and-ordering"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideRelationships",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "relationships",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "relationships"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "itemsGuideFiltersWithRelationships",
            new \Cherrycake\Actions\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "ItemsGuide",
                "methodName" => "filtersWithRelationships",
                "request" => new \Cherrycake\Actions\Request([
                    "pathComponents" => [
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "items-guide"
                        ]),
                        new \Cherrycake\Actions\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "filters-with-relationships"
                        ])
                    ]
                ])
            ])
        );
    }

    function basicUsage() {
        global $e;

        $movie = new Movie([
            "loadMethod" => "fromId",
            "id" => 15
        ]);

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "
                <html><body>
                    {$movie->title} ({$movie->year})
                </body></html>
            "
        ]));
    }

    function itemLists() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters"
        ]);

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "
                <html><body>
                    {$movies->count()} Movies found
                </body></html>
            "
        ]));
    }

    function iterate() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters"
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} ({$movie->year})<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function iterateInPattern() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "limit" => 5
            ]
        ]);

        $e->Patterns->out("ItemsGuide/IterateInPattern.html", [
            "variables" => [
                "movies" => $movies
            ]
        ]);
    }

    function customFilters() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "year" => 1968
            ]
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} ({$movie->year})<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function customOrdering() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "order" => ["released"]
            ]
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} ({$movie->year})<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function filtersAndOrdering() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "minYear" => 1980,
                "maxYear" => 1989,
                "order" => ["released", "title"]
            ]
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} ({$movie->year})<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function relationships() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "limit" => 5,
                "order" => ["random"]
            ]
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} directed by {$movie->getDirector()->name}<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }

    function filtersWithRelationships() {
        global $e;

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "releasedWhenDirectorWasYoungerThan" => 35
            ]
        ]);

        $html = "";
        foreach ($movies as $movie)
            $html .=
                "\"{$movie->title}\"".
                " directed by ".
                $movie->getDirector()->name.
                " at age ".
                ($movie->year - $movie->getDirector()->birthYear).
                "<br>";

        $e->Output->setResponse(new \Cherrycake\Actions\ResponseTextHtml([
            "code" => \Cherrycake\Output\RESPONSE_OK,
            "payload" => "<html><body>$html</body></html>"
        ]));
    }
}
