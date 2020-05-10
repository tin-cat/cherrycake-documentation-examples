<?php

namespace CherrycakeApp;

class User extends \Cherrycake\LoginUser {
    protected $tableName = "users";
    protected $userNameFieldName = "email";
	protected $encryptedPasswordFieldName = "passwordHash";
    
    protected $fields = [
        "id" => ["type" => \Cherrycake\DATABASE_FIELD_TYPE_INTEGER],
        "name" => ["type" => \Cherrycake\DATABASE_FIELD_TYPE_STRING],
        "email" => ["type" => \Cherrycake\DATABASE_FIELD_TYPE_STRING],
        "passwordHash" => ["type" => \Cherrycake\DATABASE_FIELD_TYPE_STRING]
    ];
}