<?php
    require "links.php";
    require "sql.php";

    $name = (string) md5(htmlspecialchars($_POST['name']));
    $cnpj = (string) md5(htmlspecialchars($_POST['cnpj']));
    $email= (string) md5(htmlspecialchars($_POST['email']));
    $fone = (string) md5(htmlspecialchars($_POST['telefone']));
    $end = (string)  htmlspecialchars($_POST['endereco']);   
    $pass = (string) md5(htmlspecialchars($_POST['passwd']));

    $sql_query = (string)("INSERT INTO users_login_table ("login_name","login_cnpj_cpf","login_email","login_fone","login_endereco","") VALUES ()");

   $send = mysqli_query($con,  ) or die("<script>alert('ERROR AO SE CONECTAR A BD'); window.location.replace('$login');</script>");