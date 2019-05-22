<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" content="Nigell Vyent">
    <title>gar-seatch-klant2</title>
</head>
<body>

<h1>garage zoek op klantid</h1>
<p>
    Op klantid gegevens zoeken uit de tabel klanten van de database garage.
</p>

<?php
////klantgegevens uit het formulier halen
$klantid = $_POST["klantidvak"];

////klantgegevens uit de tabel halen
require_once "gar-connect.php";

$klanten = $conn->prepare("SELECT * FROM klant WHERE id = :klantid");

$klanten->bindParam(':klantid', $klantid);
$klanten->execute();
$klant = $klanten->fetch(PDO::FETCH_ASSOC);


// klantgegevens laten zien ------------------------

echo "<table>";

    echo "<tr>";
    echo "<td>" . $klant ["id"] . "</td>";
    echo "<td>" . $klant ["klantnaam"] . "</td>";
    echo "<td>" . $klant ["klantadres"] . "</td>";
    echo "<td>" . $klant ["klantpostcode"] . "</td>";
    echo "<td>" . $klant ["klantplaats"] . "</td>";
    echo "</tr>";

echo "</table><br />";
echo "<a href='gar-menu.php'> terug naar menu </a>";




?>
</body>
</html>