<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Nigell Vyent">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>

</head>
<body>
<h1>garage create klant 2</h1>
<p>
    een klant toevoegen aan de tabel
    klant in de database garage
</p>
<?php
require_once "gar-connect.php";
//klantgegevens uit het formulier halen ---------------
//$klantlid = NULL; // komt niet uit het formulier (autoincrement)
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

//var_dump($klantnaam);
//var_dump($klantadres);
//var_dump($klantpostcode);
//var_dump($klantplaats);


$insertKlant = $conn->prepare("INSERT INTO klant SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats");
$insertKlant->bindParam(":klantnaam", $klantnaam);
$insertKlant->bindParam(":klantadres", $klantadres);
$insertKlant->bindParam(":klantpostcode", $klantpostcode);
$insertKlant->bindParam(":klantplaats", $klantplaats);
$insertKlant->execute();

echo "de klant is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu</a>";


?>
</body>
</html>