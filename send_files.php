<?php
 
 require "verifica.php";
 require "sql.php";
 require "links.php";

 $local_corew = "./file_corew/";
 $image = "./file_image/";

 if(isset($_FILES['up-pic']) || isset($_FILES['up-corew'])) {

    $ext = strtolower(substr($_FILES['up-pic']['name'],-4)); //Pegando extensão do arquivo
    $ext_c = strtolower(substr($_FILES['up-corew']['name'],-4));

    $array = array(".jpg",".jpeg", ".png", ".cdr");

    if(in_array($ext, $array) and in_array($ext_c, $array)){
       
        $new_name =  md5(rand(0, 9999999)).$ext;
        $new_name_c = md5(rand(0, 9999999)).$ext_c;

        if(is_uploaded_file($_FILES['up-pic']['tmp_name']) and is_uploaded_file($_FILES['up-corew']['tmp_name'])){

            $send = move_uploaded_file($_FILES['up-pic']['tmp_name'], $image.$new_name);
            $send = move_uploaded_file($_FILES['up-corew']['tmp_name'], $local_corew.$new_name_c);
            //inserir na tabela imagens e arquivo com nome
            $request_update = "UPDATE pedidos SET  local_files_images = '$new_name', local_file_corew = '$new_name_c' where Id_pedido =". $_SESSION['id_recovey'];
            mysqli_query($con, $request_update) or die("<script>alert('Pedido falhou -> SEND_FILES.PHP -> BD'); window.location.href='$dash_user';</script>");
            
            if($_SESSION['category'] == 'Cliente'){
                echo "<script>alert('Pedido Criado com sucesso'); window.location.href='$dash_user';</script>";
    
            }if($_SESSION['category'] == 'Fábrica'){
                echo "<script>alert('Pedido Criado com sucesso'); window.location.href='$dash_fabric';</script>"; 
                
            }            


        }else{
            echo "<script>alert('Metodo não peritido'); window.location.href=document.referrer; </script>";
        }
        
    }else {
            echo "<script>alert('lamentamos mas essa extenção nao é permitida'); window.location.href=document.referrer;</script>";
            #Adicionar redirecionamento para a pagina de arquivos
    }
}

?>