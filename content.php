<?php

echo "<div class='nils'>";
echo "<h1>" . $info["rubrik"] . "</h1>";
if ($info["filnamn"] > NULL) {
    echo "<img src='images/" . $info["filnamn"] . "' alt='Corrupt File' width='350'>" . "<br>";
}
echo "<p>" . $info["flode"] . "</p>" . "<br>";
echo $info["tid"] . "<br>"  . "<br>";
echo "</div>";
