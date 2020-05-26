<?php

namespace CherrycakeApp;

class MovieSearch extends \Cherrycake\Module {
    protected $dependentCoreModules = [
        "Database",
        "Log",
        "HtmlDocument"
    ];

    public static function mapActions() {
        global $e; 

        $e->Actions->mapAction(
            "movieSearchForm",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "MovieSearch",
                "methodName" => "form",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "movie-search"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "form"
                        ])
                    ]
                ])
            ])
        );

        $e->Actions->mapAction(
            "movieSearchResult",
            new \Cherrycake\ActionHtml([
                "moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
                "moduleName" => "MovieSearch",
                "methodName" => "result",
                "request" => new \Cherrycake\Request([
                    "pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "movie-search"
                        ]),
                        new \Cherrycake\RequestPathComponent([
                            "type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
                            "string" => "result"
                        ])
                    ],
                    "parameters" => [
                        new \Cherrycake\RequestParameter([
                            "name" => "query",
                            "type" => \Cherrycake\REQUEST_PARAMETER_TYPE_POST
                        ])
                    ]
                ])
            ])
        );
    }

    function form() {
        global $e;

        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                "
                    <form method=post action=\"{$e->Actions->getAction("movieSearchResult")->request->buildUrl()}\">
                        <input name=query type=text placeholder=\"Movie title\" />
                        <input type=submit value=\"Search\"/>
                    </form>
                ".
                $e->HtmlDocument->footer()
        ]));
    }

    function result($request) {
        global $e;

        $e->Log->logEvent(new LogEventMovieSearch($request->query));

        if (!$request->query) {
            $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
                "code" => \Cherrycake\RESPONSE_NOT_FOUND,
                "payload" =>
                    $e->HtmlDocument->header().
                    "No movie title specified".
                    $e->HtmlDocument->footer()
            ]));
            return true;
        }

        $movies = new Movies([
            "fillMethod" => "fromParameters",
            "p" => [
                "title" => $request->query
            ]
        ]);

        if (!$movies->isAny()) {
            $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
                "code" => \Cherrycake\RESPONSE_NOT_FOUND,
                "payload" =>
                    $e->HtmlDocument->header().
                    "No movies found".
                    $e->HtmlDocument->footer()
            ]));
            return true;
        }

        $html = "";
        foreach ($movies as $movie)
            $html .= "{$movie->title} ({$movie->year})<br>";

        $e->Output->setResponse(new \Cherrycake\ResponseTextHtml([
            "code" => \Cherrycake\RESPONSE_OK,
            "payload" =>
                $e->HtmlDocument->header().
                $html.
                $e->HtmlDocument->footer()
        ]));
    }
}