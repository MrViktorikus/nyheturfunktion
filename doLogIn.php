<?php

require_once 'db.php';
require_once 'session.php';

//if (isset($_POST["anvnamn"])) {
    $anvnamn = filter_input(INPUT_POST, 'anvnamn', FILTER_SANITIZE_SPECIAL_CHARS);
    $losord = filter_input(INPUT_POST, 'losord', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "SELECT * FROM `users` WHERE anvnamn='$anvnamn' AND losenord='$losord'";

//    echo $sql;
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnamn", $anvnamn);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $login = $stmt->fetch();
//    var_dump($login);
    if (!empty($login)) {
        $_SESSION["anvnamn"] = $login["anvnamn"];

//        var_dump($_SESSION);
    }

header('Location: index.php');