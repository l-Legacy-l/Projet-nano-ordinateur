<!DOCTYPE html>
<html>
    <head>
        <title>Raspberry Pi</title>
        <link rel="stylesheet" href="Style.css"/>
    </head>
    <body>
        <script src="Scripts.js"></script>
        <h1>Connexion au Raspberry Pi</h1>
        <div id="img">
            <img src="Images/logo.gif" >
        </div>

        <form action="Connexion.php" method="POST">
            <fieldset>
            <legend>Connexion</legend>
            Login : <input  type="text" name="login" required ><br>
            Mot de passe : <input id="input_password" type="password" name="password" required ><br>
            <input id="button" type="submit" value="OK"  >
            </fieldset>
        </form>

    </body>
</html>
