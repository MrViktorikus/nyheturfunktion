<?php

if (isset($_GET["action"])) {
    if ($_GET["action"] == "Save") {
        $edit = "UPDATE nyhet SET rubrik='" . $_GET['rubrik'] . "',flode='" . $_GET['flode'] . "',filnamn='" . $_GET["filnamn"] . "' WHERE id='" . $_GET['id'] . "'";
        $stmt = $dbh->prepare($edit);
        $stmt->execute();
        header("Location: admin.php");
    }
}
