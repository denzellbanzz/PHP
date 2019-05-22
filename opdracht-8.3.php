
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>alle users uit database</h1>

<p>deze gegevens komen uit de database</p>


</body>
</html>


<?php
// tabel uitlezen en netjes afgedrukt-------------
require_once "tijger_connect.php";

$users = $conn->prepare("
                                           select  *
                                           from     users
                                
    ");

$users->execute();

echo "<table>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user ["id"] . "</td>";
    echo "<td>" . $user ["username"] . "</td>";
    echo "<td>" . $user ["password"] . "</td>";
    echo "<td>" . $user ["created_at"] . "</td>";

    echo "</tr>";
}
echo "</table>";
echo "<a href='opdracht3.2.php'> terug naar het menu</a>";





?>