<?php 
//unset($_COOKIE["always_online"]);
//unset($_COOKIE["anvnamn"]);
//initiera sessionshantering och kolla om användaren är inloggad
session_start();
 $print = "loopfel";
//var_dump($_SESSION);
//echo $_SESSION["anvnamn"];
if (isset($_SESSION["anvnamn"])) {
    if($_SESSION["anvnamn"]!="0") {
        $print = "<h1>".$_SESSION["anvnamn"]." är inloggad via session</h1>";
    }
} elseif(isset($_COOKIE["anvnamn"])) {
    if($_COOKIE["anvnamn"]!="0") {
        $print = "<h1>".$_COOKIE["anvnamn"]." är inloggad via cookie</h1>";
    }else{
        $print = "<h1>ej inloggad, cookie finns men 0</h1>";
    }
} else {
//    $print = "<h1>logga in (vidareskickaning inaktiverad)</h1>";
    header("Location: login.php");
}

//var_dump($_SESSION);

//debug-info. Visa session och cookie.
include "admin/debug.php";
//$print = "";


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $print; ?>
        <p>Här ska man skickas vidare till en sida beroende på vad man gjort för inställningar. Om man inte gjort någon inställning så ska man få upp denna sida och knappar nedan med länkar till de olika sektionerna</p>
        <ul>
            <li><a href="schema_iv.php">Schema ?</a></li>
        <li><a href="">?? Kalender ??</a></li>
        <li><a href="matsedel.php">Matsedel ?</a></li>
        <li><a href="news.php">Nyheter ?</a></li>
        <li><a href="schema.php">Inställningar ?</a></li>
        </ul>
    </body>
</html>
