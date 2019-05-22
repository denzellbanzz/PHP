<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" content="Nigell Vyent">
    <title>gar-gpdate-klant2</title>
</head>
<body>

<h1>garage update klant 2</h1>
<p>
    dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel van de database garage.
</p>

<?php
$id = $_POST ["klantidvak"];

echo "begin.";



require_once "gar-connect.php";

$selectklant = $conn->prepare("  select *
                                       from klant
                                       where id = :id 


");

$selectklant->bindParam(":id", $id);

$selectklant->execute();

$klant = $selectklant->fetch(PDO::FETCH_ASSOC);


    echo "<form method='post' action='gar-update-klant3.php'>";

    echo " id:" . $klant["id"];
    echo " <input type='hidden' name='idvak' ";
    echo " value = '" . $klant["id"] . "' ";
    echo " > <br />";


    echo " klantnaam: <input type='text' ";
    echo " name = 'klantnaamvak' ";
    echo " value = '" . $klant["klantnaam"] . "' ";
    echo " > <br />";

    echo " klantadres: <input type='text' ";
    echo " name = 'klantadresvak' ";
    echo " value = '" . $klant["klantadres"] . "' ";
    echo " > <br />";

    echo " klantpostcode: <input type='text' ";
    echo " name = 'klantpostcodevak' ";
    echo " value = '" . $klant["klantpostcode"] . "' ";
    echo " > <br />";

    echo " klantplaats: <input type='text' ";
    echo " name = 'klantplaatsvak' ";
    echo " value = '" . $klant["klantplaats"] . "' ";
    echo " > <br />";



echo "<input type='submit'>";
echo "</form>";


?>


</body>

</html>
