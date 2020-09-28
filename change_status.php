<?php
  
    
    require 'links.php';
    require 'sql.php';

    $id = (int)trim($_POST['change']);

    if(empty($id) || is_int($id) == False) {
        echo "<script>alert('ID VÁZIO ou NÃO CORRESPONDE A UM NUMERO VÁLIDO'); window.referrer</script>";
    }
    
    function producao($ids){
        require 'sql.php';
        $sql = "UPDATE pedidos  SET status_pedido = 'Produção'  WHERE Id_pedido = '$ids'";
        $query = mysqli_query($con, $sql)or die("<script>alert('ENCONTRAMOS PROBLEMAS PARA ALTERAR O ID');<script>");
        echo "<script>alert('Status alterado');window.location.href = '$dash_fabric';</script>"; 
    }

    function concluido($ids){
        require 'sql.php';
        $sql = "UPDATE pedidos  SET status_pedido = 'Concluido'  WHERE Id_pedido = $ids";
        $query = mysqli_query($con, $sql)or die("<script>alert('ENCONTRAMOS PROBLEMAS PARA ALTERAR O ID');<script>");
        echo "<script>alert('Status alterado');window.location.href = '$dash_fabric';</script>";

    }

    if(isset($_POST['producao'])){
        producao($id);
        

    }

    if(isset($_POST['concluido'])){
        concluido($id);


    }

    

    
?>