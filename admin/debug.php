<?php
//session_start();

echo "Session: ";
var_dump($_SESSION);

echo "<br>Cookies: ";
var_dump($_COOKIE);
//echo "<br>Cookie always_online: " . $_COOKIE["always_online"];

echo "<br><a href='admin/kill.php'>döda session och kaka</a>";