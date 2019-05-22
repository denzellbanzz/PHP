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
    echo "<td>" . $user ["admin"] . "</td>";
    echo "</tr>";
}
echo "</table>";

