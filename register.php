<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FactoryCap - Cadastro</title>
    <link rel="stylesheet" href="css/cadastro_style.css">
    <script type='text/javascript' lenguage='javascript' src="../JSs/cpf_validate.js"></script>
    <script type='text/javascript' lenguage='javascript' src="../JSs/.js"></script>
</head>

<body>
    <center>
    <div class="container">
        <form action="log_in.php" method="POST">
            <h1>Cadastro</h1>
            <div class="bar"></div>
                <label for="name">NOME:</label><br>
            <input type="text" name="name" id='name' required=True><br>

                <label for="cnpj">CNPJ:</label><br>
            <input type="text" name="cnpj" id='cnpj' required=True value=''><br>

                <label for="endereco"> ENDEREÇO:</label><br>
            <input type="text" name="endereco" id="endereco" required=True><br>

                <label for="email">E-MAIL:</label><br>
            <input type="email" name="email" id='email' required=True><br>

                <label for="telefone">TELEFONE:</label><br>
            <input type="text" name="telefone" id='telefone' required=True><br>

                <label for="pass">SENHA:</label><br>
            <input type="password" name="passwd" id='pass' required=True><br>

                <label for="passw">REPETIR SENHA:</label><br>
            <input type="password" name="Csenha" id='passw'><br>

            <input type="button" id="btn" value="Enviar" onclick='checke()'><br>
        </div>
    </div>
    </center>
    </body>
</html>