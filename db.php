<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "berzapp");
$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';
$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$dbm = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);
