<?php
require_once 'session.php';
require_once 'login.php';
require_once 'db.php'; //ger $dbh som är PDO mot

include "admin/debug.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Du är inloggad som <strong><?php $_SESSION["anvnamn"] ?></strong>. <a href="logout.php">Logga ut</a></p>
        <p>Meny</p>
        <ul>
            <li><a href="schema_iv.php">Schema ?</a></li>
            <li><a href="">Kalender (ej tillagd)</a></li>
            <li><a href="matsedel.php">Matsedel ?</a></li>
            <li><a href="news.php">Nyheter ?</a></li>
            <li><a href="schema.php">Inställningar ?</a></li>
        </ul>
    </body>
</html>
