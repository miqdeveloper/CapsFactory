<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FactoryCap - Login</title>
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>
    <center>
    <div class="container">
        <form  action="login.php" method="POST">
            <h1>CapsFactory</h1>
            <h1>Entrar</h1>
            <div class="bar"></div>
            <label for="email">E-MAIL:</label><br>
                <input type="email" name="email" id='emai' ><br>

            <label for="pass">SENHA:</label><br>
                <input type="password" name="pass" id='passw'><br>

            <input type="submit" id="btn" value="Enviar" ><br>
        </div>
    </div>
</center>
    </body>
</html>