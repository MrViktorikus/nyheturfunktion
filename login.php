<?php

if (isset($_SESSION["anvnamn"])) {
    if ($_SESSION["anvnamn"] != "0") {
//        $print = "<h1>" . $_SESSION["anvnamn"] . " är inloggad via session</h1>";
    }
} elseif (isset($_COOKIE["anvnamn"])) {
    if ($_COOKIE["anvnamn"] != "0") {
//        $print = "<h1>" . $_COOKIE["anvnamn"] . " är inloggad via cookie</h1>";
    } else {
//        $print = "<h1>ej inloggad, cookie finns men 0</h1>";
    }
} else {
//    $print = "<h1>logga in (vidareskickaning inaktiverad)</h1>";
    header("Location: loginForm.php");
}
