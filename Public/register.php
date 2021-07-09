<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FactoryCap - Cadastro</title>
    <link rel="stylesheet" href="css/cadastro_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' lenguage='javascript' src="../JSs/register_ajax.js"></script>

    
</head>

<body>
    <center>
    <div class="container">
        <div id='form_register'>

            <h1>Cadastro</h1>

            <div class="bar"></div>

                <label for="name">NOME:</label><br>
            <input  type="text" name="name" id='name'><br>

            <div class='category'>
                <input type="checkbox" name='category' value='Fábrica'><b class="inp_box">Fábrica</b>

                <input type="checkbox" name='category' value='Cliente'><b class="inp_box">Cliente</b>
            </div>

                <label for="cnpj">CNPJ:</label><br>
            <input type="text" name="cnpj" id='cnpj'  value=''><br>

                <label for="endereco"> ENDEREÇO:</label><br>
            <input type="text" name="endereco1" id="endereco" value=''><br>

                <label for="email">E-MAIL:</label><br>
            <input type="email" name="email_t" id='email' value=''><br>

                <label for="telefone">TELEFONE:</label><br>
            <input type="text" name="telefone" id='telefone' value=''><br>

                <label for="pass">SENHA:</label><br>
            <input type="password" name="passwd" id='pass' value=''><br>

                <label for="passw">REPETIR SENHA:</label><br>
            <input type="password" name="Csenha" id='passw' value=''><br>

            <button id='btn_register'>Enviar</button>
        </form>
    </div>
</div>
    </center>
    </body>
</html>