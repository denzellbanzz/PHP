<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>post and get</title>
</head>
<body>
<h1>POST AND GET</h1>
<form>

    <div class="container">
        <label for="uname"><b>Gebruikersnaam</b></label>
        <input type="text" placeholder="plaats Gebruikersnaam" name="uname" required>

        <label for="psw"><b>Wachtwoord</b></label>
        <input type="password" placeholder="plaats Wachtwoord" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>



</body>
</html>
