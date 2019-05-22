<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" content="Nigell Vyent">
    <title>gar-update-klant3</title>
</head>
<body>

<h1>gar-update-klant3</h1>
<p>
    klantgegevens wijzigen in de tabel
    klant van de database garage.
</p>
<?php

$klantid = $_POST['idvak'];
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];


//var_dump($klantid);

require_once "gar-connect.php";
//
$sql = $conn->prepare("
                        update klant set    klantnaam     = :klantnaam,
                                            klantadres    = :klantadres,
                                            klantpostcode = :klantpostcode,
                                            klantplaats   = :klantplaats
                                            where  id     = :id





 ");

$sql->execute(
    [   ":id"        =>      $klantid,
        ":klantnaam" =>      $klantnaam,
        ":klantadres" =>     $klantadres,
        ":klantpostcode" =>  $klantpostcode,
        ":klantplaats" =>    $klantplaats
    ]);


    echo "de klant is gewijzigd. <br/>";
    echo "<a href='gar-menu.php'> terug naar het menu </a>";


?>


</body>
</html>