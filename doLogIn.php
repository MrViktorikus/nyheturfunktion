<?php

require_once 'db.php';
require_once 'session.php';

//if (isset($_POST["anvnamn"])) {
$anvnamn = filter_input(INPUT_POST, 'anvnamn', FILTER_SANITIZE_SPECIAL_CHARS);
$losord = filter_input(INPUT_POST, 'losord', FILTER_SANITIZE_SPECIAL_CHARS);
$checkbox = filter_input(INPUT_POST, 'checkbox', FILTER_SANITIZE_SPECIAL_CHARS);
$sql = "SELECT * FROM `users` WHERE anvnamn=:anvnamn AND losenord=:losord";

//    echo $sql;
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":anvnamn", $anvnamn);
$stmt->bindParam(":losord", $losord);
$stmt->execute();
$login = $stmt->fetch();
//    var_dump($login);
if (!empty($login)) {
    $_SESSION["anvnamn"] = $anvnamn;
    $_SESSION["klass"] = $login["klass"];
    if ($checkbox) {
        setcookie("always_online", 1, time()+60);
        setcookie("anvnamn", $anvnamn, time()+60);
        setcookie("anvnamn", $login["klass"], time()+60);
    } else {
//            setcookie("always_online", 0);
//            setcookie("anvnamn",0);        
        unset($_COOKIE["always_online"]);
        unset($_COOKIE["anvnamn"]);
    }
//        var_dump($_SESSION);
}

header('Location: index.php');
