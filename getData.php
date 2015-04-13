<?php
$sql = "SELECT * FROM nyhet";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();