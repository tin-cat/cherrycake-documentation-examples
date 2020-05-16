<?php

global $e;

$DatabaseConfig = [
    "providers" => [
        "main" => [
            "providerClassName" => "DatabaseProviderMysql",
            "config" => [
                "host" => $e->isDevel() ? "mariadb" : "localhost",
                "user" => $e->isDevel() ? "root" : "cherrycake-documentation",
                "password" => $e->isDevel() ? "" : "asjkdjas$44$.-a11",
                "database" => $e->isDevel() ? "cherrycake" : "cherrycake-documentation-examples",
                "charset" => "utf8mb4",
                "cacheProviderName" => "engine"
            ]
        ]
    ]
];