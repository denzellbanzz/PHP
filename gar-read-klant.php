<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="authoe" content="Nigell Vyent">
    <title>gar-read-klant.php</title>
</head>
<body>
<h1>garage read klant</h1>
<p>dit zijn alle gegevens uit de tabel van de database garage</p>

<?php
// tabel uitlezen en netjes afgedrukt-------------
require_once "gar-connect.php";

$klanten = $conn->prepare("
                                           select  *
                                           from     klant
                                
    ");

$klanten->execute();

echo "<table>";
foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant ["id"] . "</td>";
    echo "<td>" . $klant ["klantnaam"] . "</td>";
    echo "<td>" . $klant ["klantadres"] . "</td>";
    echo "<td>" . $klant ["klantpostcode"] . "</td>";
    echo "<td>" . $klant ["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'> terug naar het menu</a>";




?>
</body>
</html>