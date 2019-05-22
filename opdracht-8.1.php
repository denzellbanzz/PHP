<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['ingelogd'])){
    echo "je was al ingelogd";
    require_once("opdracht-6.3.php");
}
?>
<h1>Login</h1>
<form action="opdracht-8.2.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit"></submit>
</form>
</body>
</html>