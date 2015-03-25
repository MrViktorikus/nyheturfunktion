<?php
session_start();
echo "<br>Session status: " . session_status();
echo "<br><br>Session: ";
var_dump($_SESSION);
echo "<br><br>Get:";

if (isset($_GET["anvnamn"])) {
    echo "<br>Loggar in " . $_GET["anvnamn"];
    $_SESSION["anvnamn"] = $_GET["anvnamn"];
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "kill") {
        echo "<br>dödar session...";
        session_destroy();
    }
}
?>
<br><br>
<a href="?action=inget&anvnamn=albjoh456">Logga in albjoh456</a>
<br><br>
<a href="?action=kill">Döda sessionen</a>
<br><br>
<a href="testSession.php">Ladda om </a>