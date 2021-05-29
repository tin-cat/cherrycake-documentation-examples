<?php

namespace CherrycakeApp;

class Movies extends \Cherrycake\Items {
    protected $tableName = "movies";
    protected $itemClassName = "\CherrycakeApp\Movie";

    function fillFromParameters($p = false) {
        // Treat parameters
        self::treatParameters($p, [
            "year" => ["default" => false],
            "releasedWhenDirectorWasYoungerThan" => [
                "default" => false
            ],
            "minYear" => ["default" => false],
            "maxYear" => ["default" => false],
            "title" => ["default" => false],
            "orders" => ["addArrayKeysIfNotExist" => [
                "released" => "movies.year asc",
                "title" => "movies.title asc"
            ]]
        ]);

        // Modify $p accordingly
        if ($p["year"]) {
            $p["wheres"][] = [
                "sqlPart" => "movies.year = ?",
                "values" => [
                    [
                        "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER,
                        "value" => $p["year"]
                    ]
                ]
            ];
        }

        if ($p["releasedWhenDirectorWasYoungerThan"]) {
            $p["tables"][] = "directors";
            $p["wheres"][] = ["sqlPart" => "directors.id = movies.directorId"];
            $p["wheres"][] = [
                "sqlPart" => "movies.year - directors.birthYear <= ?",
                "values" => [
                    [
                        "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER,
                        "value" => $p["releasedWhenDirectorWasYoungerThan"]
                    ]
                ]
            ];
        }

        if ($p["minYear"]) {
            $p["wheres"][] = [
                "sqlPart" => "movies.year >= ?",
                "values" => [
                    [
                        "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER,
                        "value" => $p["minYear"]
                    ]
                ]
            ];
        }

        if ($p["maxYear"]) {
            $p["wheres"][] = [
                "sqlPart" => "movies.year <= ?",
                "values" => [
                    [
                        "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER,
                        "value" => $p["maxYear"]
                    ]
                ]
            ];
        }

        if ($p["title"]) {
            $p["wheres"][] = [
                "sqlPart" => "movies.title like ?",
                "values" => [
                    [
                        "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_STRING,
                        "value" => "%".$p["title"]."%"
                    ]
                ]
            ];
        }

        // Call the parent fillFromParameters
        return parent::fillFromParameters($p);
    }
}
