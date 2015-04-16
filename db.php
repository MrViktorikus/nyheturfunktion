<?php
//define("DB_SERVER", "berzan.hemsida.eu");
//define("DB_USER", "berzanhe_appen");
//define("DB_PASSWORD", "berzan");
//define("DB_NAME", "berzanhe_berzanapp");

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "berzanapp");

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';
$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$dbh = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);
//$dbm = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);