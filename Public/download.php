<?php

 
 require "links.php";
 
$arquivo = $_GET["arquivo"];



$testa = substr($arquivo,-3);

$bloqueados = array('php','tml','htm', 'html');

if(!in_array($testa,$bloqueados)){

    if(isset($arquivo) && file_exists($arquivo)){
        // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
           switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){
           // verifica a extensão do arquivo para pegar o tipo

              case "jpeg": $tipo="image/jpeg"; break;
              case "png": $tipo="image/png"; break;
              case "jpg": $tipo="image/jpg"; break;
              case "pdf": $tipo="application/pdf"; break;
              case "cdr": $tipo="application/octet-stream"; break;
              case "php": // deixar vazio por seurança
              case "htm": // deixar vazio por seurança
              case "html": // deixar vazio por seurança
           }
           header('Content-Description: File Transfer');
           header("Content-Type: ".$tipo);
           // informa o tipo do arquivo ao navegador
           header("Content-Length: ".filesize($arquivo));
           header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

           // informa o tamanho do arquivo ao navegador
           header("Content-Disposition: attachment; filename=".basename($arquivo));
           // informa ao navegador que é tipo anexo e faz abrir a janela de download,
           //tambem informa o nome do arquivo
           readfile($arquivo); // lê o arquivo
           exit; // aborta pós-ações
    }
}

else{
    echo "Erro!";
    exit;
}

?>