<?php
session_start();

$name = $_POST["username"];
$ww = $_POST["password"];
//$pwhash = password_hash($ww, PASSWORD_DEFAULT);

require_once "tijger_connect.php";

$accounts = $conn->prepare("
select username,
password
from users
");
$accounts->execute();

$gevonden = false;
foreach($accounts as $account) {
    if ($name == $account["username"]) {
        if (password_verify($ww, $account["password"]))
        {
            $gevonden = true;
        }
        $gevonden = true;
    }
}

if ($gevonden)
{
    echo ("Welkom " . $name . ", je bent ingelogd");
    $_SESSION["ingelogd"] = true;
    require_once "opdracht-6.3.php";
} else {
    echo ("verkeerde inlog");
    session_destroy();
}
echo ("</br>");