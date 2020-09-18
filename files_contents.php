<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' lenguage='javascript' src="../send_imageT.js"></script>
    
    <title>Document</title>
</head>
<body> 
<form id='form_date' method="POST" enctype="multipart/form-data" action='send_files.php' >
    <label for='up-pic'> Escolha a imagem</label>
    <input type="file" name="up-pic" id="uppic" acept="image/*"><br>

    <label for='up-pic'> Escolha a arte(em arquivo corew)</label>
    <input type="file" name="up-corew" id="upcorew"><br>
    <button id='btns' type='submit' >Enviar</button>
</form>
</body>
</html>