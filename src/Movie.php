<?php

namespace CherrycakeApp;

class Movie extends \Cherrycake\Item {
    protected $tableName = "movies";
    protected $fields = [
        "id" => [
            "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER
        ],
        "title" => [
            "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_STRING
        ],
        "summary" => [
            "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_TEXT
        ],
        "year" => [
            "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_YEAR
        ],
        "imdbRating" => [
            "type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_FLOAT
        ]
    ];

    function getDirector() {
        return new Director([
            "loadMethod" => "fromId",
            "id" => $this->directorId
        ]);
    }

    function updateImdbRating() {
    }
}
