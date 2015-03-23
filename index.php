<?php

include './getFood-JSON.php';



$index = date("N") - 1;



$veckoDagar[0] = "Måndag";
$veckoDagar[1] = "Tisdag";
$veckoDagar[2] = "Onsdag";
$veckoDagar[3] = "Torsdag";
$veckoDagar[4] = "Fredag";

for ($j = 0; $j <= 2; $j++) {
    $matidag[$j] = getFood(0, $index, $j);
}



for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $test = getFood(0, $i, $j);
        $matenvecka[$i][$j] = $test;
    }
    echo "<br>";
}

for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $test = getFood(1, $i, $j);
        $matennastavecka[$i][$j] = $test;
    }
    echo "<br>";
}






if (isset($_POST["action"])) {
    $vy = $_POST["action"];
} else {
    $vy = 1;
}




echo "<form method='POST'>";
echo "<input type='submit' name='action' value='1'>";
echo "<input type='submit' name='action' value='2'>";
echo "<input type='submit' name='action' value='3'>";
echo "<div id='matsedel'>";
echo "<h2> Matsedel </h2>";
echo "<ul>";
echo "</form method='POST'>";


switch ($vy) {
    case 1 :
        echo "Idag:<br>";
        echo $veckoDagar[$index] . "<br><br>";


        for ($j = 0; $j <= 2; $j++) {
            echo $matidag[$j] . "<br>";
        }
        

        break;
    case 2:
        echo "Denna vecka:<br>";
        
        for ($i = 0; $i <= 4; $i++) {
            
            echo  $veckoDagar[$i] . "<br>";
            for ($j = 0; $j <= 2; $j++) {
                echo $matenvecka[$i][$j] . " ,<br> ";
            }
            echo "<br>";
        }

        break;

    case 3:
        echo "Nästa vecka:<br>";
        
        for ($i = 0; $i <= 4; $i++) {
            
            echo $veckoDagar[$i] . "<br>";
            for ($j = 0; $j <= 2; $j++) {
                echo $matennastavecka[$i][$j] . " , <br>";
            }
            echo "<br>";
        }
        break;


    default:
        break;
}
?>

