<?php
    require 'verifica.php';
    require 'sql.php';
    require 'capture_id.php';

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
        $dom->load_html("<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='widli=device-widli, initial-scale=1.0'>
            <title>Documento- PDF</title>
            <link rel='stylesheet' href='css/spectre.min.css'>
            <link rel='stylesheet' href='css/spectre-exp.min.css'>
            <link rel='stylesheet' href='css/spectre-icons.min.css'>
        
            <style>
                h4{line-height:10px;font-size: 19px;margin-left: 2em; color: #000000;}
                li{line-height:15px;font-size: 17px; margin-left: 4em; font-weight: 600;}
                h5, h6{margin-left: 5em; color:#000000 ;}
                h6{color: red;}
        
                
        
            </style>
        </head>
        <body>
            <center><h2>Pedido - ".$_SESSION['name'] ."</h2></center>
             
                <h4>1. Modelo</h4>
                    <li>".$modelo."</li>
        
                <h4>2. Quantidade</h4>
                    <li>".$quantidade_0." Bonés</li>
                    <h5>2.1. Complemento</h5>
                        <li>".$quantidade_1."</li>
        
                <h4>4. Tecido</h4>
                    <li>".$tecido."</li>
        
                <h4>5. Fundo e Laterais</h4>
                    <li>".$fndltrs."</li>
        
                <h4>6. Ataca</h4>
                    <li>".$ataca."</li>
        
                <h4>7. Dublagem</h4>
                    <li>".$dublagem."</li>
        
                <h4>8. Cor</h4>
                    <li> Aba: ".$corAbaFrenteFL_0."</li>
                    <li> Frente: ".$corAbaFrenteFL_1."</li>
                    <li> Fundo e Lateral: ".$corAbaFrenteFL_2."</li>
        
                <h4>9. Aplicação da logomarca</h4>
                    <li>".$apllogo."</li>
        
                <h4>10. Informações adicionais</h4>
                    <li>10.1 - ".$ifadd_0."</li>
                    <li>10.2 - ".$ifadd_1."</li>
                <h6>Atenção se o campo estiver em branco significa que não foi marcado.</h6>
        </body>
        </html>");
            
        $dom->setPaper('A4', 'portrait');
        $dom->render();
        $name_pdf = (string)md5($_SESSION['name'].'_'.rand(0, 9999999));
        #criar tabela para adicionar a fila de pedidos
        file_put_contents('pdf_temp/'.$name_pdf.'.pdf', $dom->output());
        #login no sql para registrar o pedido 
        $name = $_SESSION['name']; 
        $sql_argv = "INSERT INTO pedidos (nome_pedido, status_pedido, local_files_pedido, local_files_images, local_file_corew) VALUES ('$name', 'Pendente', '$name_pdf.pdf', ' ', ' ' )";
        $query = mysqli_query($con, $sql_argv)or die("<script>alert('ERRO -> SENDCAP.PHP');</script>");
        session_start();
        $_SESSION['id_recovey'] = mysqli_insert_id($con);
       
        







   #fazer upload de arquivos
  










?>