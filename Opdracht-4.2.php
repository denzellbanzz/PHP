<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>accountregistratie.2</title>
</head>
<body>
<h1>accountregistratie</h1>

<?php

var_dump($_POST);

echo '-->'.$_POST['rol'] . '<--';

$usernaam = $_POST["usernamevak"];
$ww = $_POST["passwordvak"];
$wwhash = password_hash($ww, PASSWORD_DEFAULT);
$gebruiker = $_POST['rol'];
$datum = date('Y-m-d');


require_once "Opdracht-4.php"; //DB connectie
//echo "hier ben ik";

echo '->'.$datum . '<br />';

echo $usernaam . '<br />';
//echo $ww;
echo $wwhash. '<br />';
echo $gebruiker;


$sql = $conn->prepare("  
                                  insert into users (username, password, created_at, rol) values 
                                                   (:username, :password, :datum, :gebruiker)");


$sql->execute([
    "username" => $usernaam,
    "password" => $wwhash,
    "gebruiker" => $gebruiker,
    "datum" => $datum
]);

echo "Uw account is geregistreerd.<br />"


?>

</body>
</html>