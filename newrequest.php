<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send me caps</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bones_style.css">
</head>
<body>
    <form action="#" method="POST">
    <div class="main">
        <div class='grid'>
            <div class="grid-item">
                <h5>Modelo</h5>
                <input type="checkbox" name='Trucker' checked> Trucker<br>
                <input type="checkbox" name='six-gomos'> 6 gomos<br>
                <input type="checkbox" name='abareta'> Aba Reta<br>
            </div>

            <div class="grid-item">
                <h5>Quantidade</h5>
                <input type="number" name="quant" min="30"><br>
                <label for="adic">Complemento</label><br>
                <input type="text" name='adic' placeholder="exe: 30 + 5 infantis">                
            </div>

            <div class="grid-item">
                <h5>Tecido</h5>
                <input type="checkbox" name='s-cap'> Super Cap<br>
                <input type="checkbox" name='Brim'> Brim  <br>
                <input type="checkbox" name='M-sport'> Malha Sport <br>
                <input type="checkbox" name='Gorgurinho'> Gorgurinho<br>
                <input type="checkbox" name='Alfaiataria'> Alfaiataria<br>
                <input type="checkbox" name='Camurça'> Camurça           
            </div>

            <div class="grid-item">
                <h5>Fundo e Laterais</h5>
                <input type="checkbox" name='telado'> Telado <br>
                <input type="checkbox" name='cem-tecido'>100% tecido<br>
            </div>

            <div class="grid-item">
                <h5>Ataca</h5>

                <input type="checkbox" name='Plastico'> Plástico<br>
                <input type="checkbox" name='F-matalica'> Fivela metálica<br>
                <input type="checkbox" name='Velcro'> Velcro<br>
            </div>

            <div class="grid-item"> 
                <h5>Dublagem</h5>
                <input type="checkbox" name='C-intertela'> Com intertela<br>
                <input type="checkbox" name='S-intertela'> Sem intertela<br>
                <input type="checkbox" name='P-fabrica'> Padrão de Fábrica<br>              
            </div>

            <div class="grid-item">
                <h5>Cor</h5>

                <label for='Aba-colorid'>Aba</label><br>
                    <input type="text" name='aba' id='Aba-colorid'><br>

                <label for='Frente-colorid'>Frente</label><br>
                    <input type="text" name='frente' id='Frente-colorid'><br> 
                
                <label for='FundoL-colorid'>Fundo e Lateral</label><br>
                    <input type="text" name='frente' id='FundoL-colorid'><br>
            </div>

            <div class="grid-item">
                <h5>Aplicação da logomarca</h5>
                <input type="checkbox" name='Bordado'> Bordado<br>
                <input type="checkbox" name='Bordado3d'> Bordado em 3D<br>
                <input type="checkbox" name='Silk'> Silk 3D<br>
                <input type="checkbox" name='Aplique'>Aplique<br>             
            </div>

            <div  class="grid-item">
                <h5>Informações adicionais</h5>
                <input type="checkbox" name='Aba-espumada'> Aba Espumada<br>
                <input type="checkbox" name='D-sanduiche'> Detalhe sanduiche<br>
                <input type="checkbox" name='A-virada'> Aba Virada<br>
                <label for='I-add'>Infos Adicionais</label><br>
                <input type="text" name='I-adicionais' id='I-add'>

            </div>

            <div class="grid-item">
                <input type="file" name="up-pic" id="uppic">
                <input type="file" name="up-corew" id="upcorew">

            </div>

        </div>
    </div>
    </form>    
</body>
</html>