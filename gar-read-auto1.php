<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="authoe" content="Nigell Vyent">
    <title>gar-read-klant.php</title>
</head>
<body>
<h1>garage read auto</h1>
<p>dit zijn alle gegevens uit de tabel van de database garage</p>

<?php
// tabel uitlezen en netjes afgedrukt-------------
require_once "gar-connect.php";

$klanten = $conn->prepare("
                                           select  *
                                           from     auto
                                
    ");

$klanten->execute();

echo "<table>";
foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant ["id"] . "</td>";
    echo "<td>" . $klant ["autokenteken"] . "</td>";
    echo "<td>" . $klant ["automerk"] . "</td>";
    echo "<td>" . $klant ["autotype"] . "</td>";
    echo "<td>" . $klant ["autokmstand"] . "</td>";
    echo "<td>" . $klant ["klant_id"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'> terug naar het menu</a>";




?>
</body>
</html>