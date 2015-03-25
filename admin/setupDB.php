<?php

define("DB_NAME", "berzanapp");

define("DB_SERVER", "localhost");


define("DB_USER", "root");

define("DB_PASSWORD", "");


$sql = file_get_contents('berzanapp.sql', true);
//echo $file;


$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
$stmt = $dbh->prepare($sql);
if ($stmt->execute()) {
    echo "rensning och import lyckades. Databas och tabell users redo.";
} else {
    echo "något gick lite fel";
}
