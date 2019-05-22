<!
<html>
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant2</title>
    <link rel="stylesheet" href="./.css/garage.css">
</head>
<body>
<h1>Garage Delete Klant 2</h1>
<p>Op klantid gegevens zoeken uit de tabel klanten van de database zodat ze verwijderd kunnen worden</p>

<?php

$id = $_POST["klantvak"];
var_dump($_POST);

require_once "gar-connect.php";

$selectklant = $conn->prepere("
                                    select *
                                       
                                        from  klant
                                        where id = :id
                                        ");

$selectklant->execute([":id => $id"]);
$klanten = $selectklant->fetch(PDO::FETCH_ASSOC);

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["id"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    "<td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}

echo "</table><br />";
echo "<form action='gar-delete-klant3.php' method='post'>";

echo "<input type='hidden' name='klantidvak' value=$id>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze klant. <br />";
echo "<input type='submit'>";
echo "</form>";


?>

</body>
</html>