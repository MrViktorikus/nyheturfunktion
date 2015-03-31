<?php 

//initiera sessionshantering och kolla om användaren är inloggad
session_start();
if (!isset($_SESSION["anvnamn"])) {
    header("Location: login.php");
} else {
    $print = $_SESSION["anvnamn"];
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $print; ?>
    </body>
</html>
