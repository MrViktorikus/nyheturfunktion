<?php

/* Parametrar:
  klass = klass ID eller sal ID ex. na12c, t419

  vecka = heltal enligt ISO-8601
  om inget anges s�tts den till nuvarande vecka

  dag
  1=m�ndag 2=tisdag 3=onsdag 4=torsdag 5=fredag (0,6,7 ger hela n�sta vecka)
  om inget anges s�tts den till nuvarande dag

  visahelaveckan
  om angiven visas hela nuvarande vecka

  width = bredden p� bilden i pixlar
  om inget anges s�tts den till 360

  height = h�jden p� bilden i pixlar
  om inget anges s�tts den till 480

 */


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "berzanapp");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);




//klass = klass ID eller sal ID ex. na12c, t419
if (isset($_GET["klass"])) {
    $klass = filter_input(INPUT_GET, "klass");
}

//sätt $klass till vad nu inställningen är i inlog-tabellen
session_start();
$_SESSION["anvnamn"] = 'idaekb123';

$anvnamn = $_SESSION["anvnamn"];

$sql = "SELECT klass FROM users WHERE anvnamn='" . $anvnamn . "'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$klass = $stmt->fetch();



//vecka = heltal enligt ISO-8601
//om inget anges s�tts den till nuvarande vecka
if (isset($_GET["vecka"])) {
    $vecka = (int) filter_input(INPUT_GET, "vecka");
} else {
    $vecka = (int) date("W");
}

//1=m�ndag 2=tisdag 3=onsdag 4=torsdag 5=fredag 5.955=alla dagarna
//om inget anges s�tts den till nuvarande dag
if (isset($_GET["dag"])) {
    $dag = filter_input(INPUT_GET, "dag");
} else {
    $dag = date("w");
}

//om visahelaveckan �r satt, visas hela nuvarande vecka.
if (isset($_GET["visahelaveckan"])) {
    $dag = 0;
} elseif ($dag == 0 || $dag == 6 || $dag == 7) { //visa hela n�sta vecka p� helger.
    $vecka++;
    $dag = 0;
}

//width = bredden p� bilden i pixlar
//om inget anges s�tts den till 360
if (isset($_GET["width"])) {
    $width = filter_input(INPUT_GET, "width");
} else {
    $width = 360;
}

//height = h�jden p� bilden i pixlar
//om inget anges s�tts den till 480
if (isset($_GET["height"])) {
    $height = filter_input(INPUT_GET, "height");
} else {
    $height = 480;
}

if (isset($klass)) {
    //echoar fullst�ndig img tag
    
    $dag=4;
    
    echo "<div id='bild'>";
    echo '<img src="http://www.novasoftware.se/ImgGen/schedulegenerator.aspx?format=png&schoolid=89920/sv-se&type=1&id=' . $klass["klass"] . '&period=&week=' . $vecka . '&day=' . (int) pow(2, $dag - 1) . '&width=' . $width . '&height=' . $height . '">';
    echo "</div>";
    
    if ($dag == 2) {

        echo "<div id='ivtis'>";
        echo "detta är ditt iv";
        echo "</div>";
    }
    
    if ($dag == 4) {

        echo "<div id='ivtor'>";
        echo "detta är ditt iv";
        echo "</div>";
    }
} else {
    echo "klass inte definierad";
}

$testhojd= $height * 0.22;



?>
