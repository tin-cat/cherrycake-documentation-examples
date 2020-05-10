<?php

namespace CherrycakeApp;

class Director extends \Cherrycake\Item {
    protected $tableName = "directors";
    protected $fields = [
        "id" => [
            "type" => \Cherrycake\DATABASE_FIELD_TYPE_INTEGER
        ],
        "name" => [
            "type" => \Cherrycake\DATABASE_FIELD_TYPE_STRING
        ]
    ];
}