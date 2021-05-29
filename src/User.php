<?php

namespace CherrycakeApp;

class User extends \Cherrycake\Login\LoginUser {
    protected $tableName = "users";
    protected $userNameFieldName = "email";
	protected $encryptedPasswordFieldName = "passwordHash";

    protected $fields = [
        "id" => ["type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_INTEGER],
        "name" => ["type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_STRING],
        "email" => ["type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_STRING],
        "passwordHash" => ["type" => \Cherrycake\Database\DATABASE_FIELD_TYPE_STRING]
    ];
}
