<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send me caps</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bones_style.css">
    <?php require 'verifica.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' lenguage='javascript' src="../JSs/sendme.js"></script>
    
</head>
<body>


</script>
       
    <div class="main">
        <div class='grid'>
            <div class="grid-item">

                <h5>Modelo</h5>
                <input type='checkbox' name='capsM'  value='Trucker'> Trucker<br>
                <input type='checkbox' name='capsM'  value='6 gomos'> 6 gomos<br>
                <input type='checkbox' name='capsM'  value='abareta'> Aba Reta<br>
        

            </div>

            <div class="grid-item">
                <h5>Quantidade</h5>
                <input type="number" name="capsN" min="30" value="30"><br>

                <label for="adic">Complemento</label><br>
                <input type="text" name='capstQ' placeholder="exe: 30 + 5 infantis" value="">                
            </div>

            <div class="grid-item">

                <h5>Tecido</h5>
                <input type="checkbox" name='capsT' value='Super Cap'> Super Cap<br>
                <input type="checkbox" name='capsT' value='Brim'> Brim  <br>
                <input type="checkbox" name='capsT' value='Malha Sport'> Malha Sport <br>
                <input type="checkbox" name='capsT' value='Gorgurinho'> Gorgurinho<br>
                <input type="checkbox" name='capsT' value='Alfaiataria' > Alfaiataria<br>
                <input type="checkbox" name='capsT' value='Camurça' > Camurça           
            </div>

            <div class="grid-item">
                <h5>Fundo e Laterais</h5>
                <input type="checkbox" name='capsFL' value='Telado'> Telado <br>
                <input type="checkbox" name='capsFL' value='100% tecido'> 100% tecido<br>
            </div>

            <div class="grid-item">
                <h5>Ataca</h5>

                <input type="checkbox" name='capsA' value='Plástico'> Plástico<br>
                <input type="checkbox" name='capsA' value='Fivela metálica'> Fivela metálica<br>
                <input type="checkbox" name='capsA' value='Velcro'> Velcro<br>
            </div>

            <div class="grid-item"> 
                <h5>Dublagem</h5>
                <input type="checkbox" name='capsD' value='Com intertela'> Com intertela<br>
                <input type="checkbox" name='capsD' value='Sem intertela'> Sem intertela<br>
                <input type="checkbox" name='capsD' value='Padrão de Fábrica'> Padrão de Fábrica<br>              
            </div>

            <div class="grid-item">
                <h5>Cor</h5>

                <label for='Aba-colorid'>Aba</label><br>
                    <input type="text" name='Aba-colorid' value=''><br>

                <label for='Frente-colorid'>Frente</label><br>
                    <input type="text" name='Frente-colorid'  value='' ><br> 
                
                <label for='FundoL-colorid'>Fundo e Lateral</label><br>
                    <input type="text" name='FundoL-colorid' value=''><br>
            </div>

            <div class="grid-item">
                <h5>Aplicação da logomarca</h5>
                <input type="checkbox" name='capsAL' value='Bordado'> Bordado<br>
                <input type="checkbox" name='capsAL' value='Bordado em 3D'> Bordado em 3D<br>
                <input type="checkbox" name='capsAL' value='Silk 3D'> Silk 3D<br>
                <input type="checkbox" name='capsAL' value='Aplique'>Aplique<br>             
            </div>

            <div  class="grid-item">
                <h5>Informações adicionais</h5>
                <input type="checkbox" name='capsIA' value='Aba Espumada'> Aba Espumada<br>
                <input type="checkbox" name='capsIA' value='Detalhe sanduiche'> Detalhe sanduiche<br>
                <input type="checkbox" name='capsIA' value='Aba Virada'> Aba Virada<br>

                <label for='I-add'>Infos Adicionais</label><br>
                <input type="text" name='I-addd' id='I-add'>

            </div>

            <div class="grid-item">
                <input type="file" name="up-pic" id="uppic">
                <input type="file" name="up-corew" id="upcorew">
                <button id='btns' >Enviar</button>

            </div>

        </div>
    </div>
    </form>
  
</body>
</html>