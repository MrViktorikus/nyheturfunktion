<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login.php</title>
    </head>
    <body>
        <form method = 'POST' action="doLogin.php">
            <p>Användarnamn:</p> <input type = 'text' name = 'anvnam' required>
            <p>Lösenord:</p><input type = 'password' name = 'losord' required><br>
            <input type='checkbox' name='checkbox'> Håll mig inloggad<br>
            <input type = 'submit' value = 'Logga in'>
        </form>
        <form method='POST'> <input type = 'submit' value = 'Glömt Lösenord?' name='glomt'></form>
    </body>
</html>
