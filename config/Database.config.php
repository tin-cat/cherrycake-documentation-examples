<?php

$DatabaseConfig = [
    "providers" => [
        "main" => [
            "providerClassName" => "DatabaseProviderMysql",
            "config" => [
                "host" => "mariadb",
                "user" => "root",
                "password" => "",
                "database" => "cherrycake",
                "charset" => "utf8mb4",
                "cacheProviderName" => "engine"
            ]
        ]
    ]
];