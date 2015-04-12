<?php
session_start();
//session_destroy();
unset($_SESSION["anvnamn"]);

unset($_COOKIE["always_online"]);
unset($_COOKIE["anvnamn"]);

echo "Session: ";
var_dump($_SESSION);

echo "<br>Cookies: ";
var_dump($_COOKIE);

header('Location: ../index.php');
