<!dotype>
<?php
    session_start();
?>

<html>
<head>
    <title>voorbeeld session</title>
</head>
<body>
<h1>voorbeeld session 1</h1>

<?php
echo ("lievelingsdier is: " . $_session[
    "lievelingsdier"] .
?>
</body>
</html>
