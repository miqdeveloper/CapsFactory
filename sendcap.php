<?php
    require 'verifica.php';
    require 'sql.php';

    use Dompdf\Dompdf;
    require "vendor/autoload.php";
    require_once "vendor/dompdf/autoload.inc.php";    
    
    

    $dom = new Dompdf();

    $modelo = $_POST["modelo"];
    $quantidade_0 = $_POST['qauntidade'][0];

    $quantidade_1 = $_POST['qauntidade'][1];

    $tecido = $_POST['tecido'];

    $fndltrs = $_POST['fndltrs'];

    $ataca = $_POST['ataca'];

    $dublagem = $_POST['dublagem'];

    $corAbaFrenteFL_0 = $_POST['corAbaFrenteFL'][0];

    $corAbaFrenteFL_1 = $_POST['corAbaFrenteFL'][1];

    $corAbaFrenteFL_2 = $_POST['corAbaFrenteFL'][2];

    $apllogo = $_POST['apllogo'];

    $ifadd_0 = $_POST['ifadd'][0];
    $ifadd_1 = $_POST['ifadd'][1];

   
    $dom->set_option('isHtml5ParserEnabled', true);
    $dom->load_html("<!DOCTYPE html> <html><head>
        <style>
        *{font-family:Arial,Helvetica,sans-serif; text-size-adjust: auto;}
        body{text-indent: 3px;}
        h1{font-size:20px;text-align: center; overflow:hidden;}
        li, ul, p{font-size:16px;line-height: 0.5}
        </style>
    
            </head><body><h1>Pedido</h1><br><h2>Modelo</h2><p><ul><li><p>".$modelo."</p></ul></li><h2>Quantidade</h2><ul><li><p>".$quantidade_0." Bonés </p></ul></li><h2>Complemento</h2><ul><li><p>".$quantidade_1."</p></ul></li><h2>Tecido</h2><ul><li><p>".$tecido."</p></ul></li><h2>Fundo e Laterais</h2><ul><li><p>".$fndltrs."</p></ul></li><h2>Ataca</h2><ul><li><p>".$ataca."</p></ul></li><h2>Dublagem</h2><ul><li><p>".$dublagem ."</p></ul></li><h2>Cor</h2><ul><li><p> Aba > ".$corAbaFrenteFL_0."</p></ul></li><ul><li><p> Frente > ".$corAbaFrenteFL_1."</p></ul></li><ul><li><p> Fundo e Lateral > ".$corAbaFrenteFL_2."</p></ul></li><h2>Aplicação da logomarca</h2><ul><li><p>".$apllogo."</p></ul></li><h2>Informações adicionais</h2><ul><li><p>".$ifadd_0."</p></ul></li><ul><li><p>".$ifadd_1."</p></ul></li>Nome: ". $_SESSION['name']."</body></html>");
    
   $dom->setPaper('A4', 'portrait');
   $dom->render();
   $name_pdf = (string)md5($_SESSION['name'].'_'.rand(0, 9999999));
   #criar tabela para adicionar a fila de pedidos
   file_put_contents('pdf_temp/'.$name_pdf.'.pdf', $dom->output());
   #login no sql para registrar o pedido 
   $name = $_SESSION['name']; 
   $sql_argv = "INSERT INTO pedidos (nome_pedido, status_pedido, local_files_pedido, local_files_images) VALUES ('$name', 'Pendente', '$name_pdf.pdf', 'NULL')";
   $query = mysqli_query($con, $sql_argv)or die("<script>alert('ERRO -> SENDCAP.PHP');</script>");
   #fazer upload de arquivos











?>