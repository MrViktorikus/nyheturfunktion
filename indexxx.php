<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>schema</title>


        <style>
            .lektion{
                border:solid thin black;
                width:100px;
            }

        </style>
    </head>
    <body>
        <?php
        $schemaDag = array();
        $schemaDag[] = array("dag" => "man", "starttid" => "0810", "sluttid" => "1110", "amne" => "matte",
        "larare" => "Johan", "sal" => "fikarum", "fargkod" => "#23424");
        $schemaDag[] = array("dag" => "man", "starttid" => "1030", "sluttid" => "1130", "amne" => "matte",
        "larare" => "Johan", "sal" => "fikarum", "fargkod" => "#23424");
        $schemaDag[] = array("dag" => "man", "starttid" => "1230", "sluttid" => "1350", "amne" => "matte",
        "larare" => "Johan", "sal" => "fikarum", "fargkod" => "#23424");
        $schemaDag[] = array("dag" => "man", "starttid" => "1430", "sluttid" => "1550", "amne" => "matte",
        "larare" => "Johan", "sal" => "fikarum", "fargkod" => "#23424");
        $schemaDag[] = array("dag" => "man", "starttid" => "1600", "sluttid" => "1650", "amne" => "matte",
        "larare" => "Johan", "sal" => "fikarum", "fargkod" => "#23424");
        //5lektioner 1 dag




        echo "<div id='schema_man'>";
        echo "<h2> MÅNDAG </h2>";
        echo "<ul>";


        foreach ($schemaDag as $lektion) {
        $height = $lektion["sluttid"] - $lektion["starttid"];
        echo "<div class='lektion' style='height:" . $height . "px;'>";
        echo"<li>" . $lektion["dag"] . "</li>";
        echo"<li>" . $lektion["amne"] . "</li>";
        echo"<li>" . $lektion["larare"] . "</li>";
        echo"<li>" . $lektion["sal"] . "</li>";
        echo"<li>" . $lektion["starttid"] . "</li>";
        echo"<li>" . $lektion["sluttid"] . "</li>";
        echo "</div>";
        }
        echo "</ul>";
        echo "</div>";

        
        $jsonrdy = json_encode($schemaDag);
        
        $schemaDagNy = json_decode($jsonrdy);
        
        var_dump($schemaDagNy); 
        
        
        

//        var text = '{"employees":[' +
//        '{"firstName":"John","lastName":"Doe" },' +
//        '{"firstName":"Anna","lastName":"Smith" },' +
//        '{"firstName":"Peter","lastName":"Jones" }]}';





        function getSchema($klass, $vecka) {

        return $schemaDag;
        }
        ?>


    </body>
</html>