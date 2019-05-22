<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Nigell Vyent">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>

</head>
<body>
<h1>garage create klant 2</h1>
<p>
    een auto toevoegen aan de tabel
    klant in de database garage
</p>
<?php
require_once "gar-connect.php";
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$klant_id = $_POST["klant_idvak"];

$sql = $conn->prepare("
                                insert into auto values  
                                (
                                        :autokenteken, 
                                        :automerk,
                                        :autotype, 
                                        :autokmstand, 
                                        :klant_id
                                )
                            ");

$sql->execute([
    "autokenteken"      =>  $autokenteken,
    "automerk"          =>  $automerk,
    "autotype"          =>  $autotype,
    "autokmstand"       =>  $autokmstand,
    "klant_id"          =>  $klant_id
]);




echo "de klant is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu</a>";


?>
</body>
</html>