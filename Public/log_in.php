<?php
    require "links.php";
    require "sql.php";

    


 $nam =  htmlspecialchars($_POST['nome']);
 $category =  htmlspecialchars($_POST['category']);
 $cnpj =  htmlspecialchars($_POST['cpf']);
 $email= htmlspecialchars($_POST['email']);
 $fone =  htmlspecialchars($_POST['telefone']);
 $end_ =  htmlspecialchars($_POST['end']);   
 $pass =  md5(htmlspecialchars($_POST['pass']));
 
$sql = (String) ("INSERT INTO users_login_table (login_name, login_category, login_cnpj_cpf, login_email, login_fone, login_endereco, login_pass) VALUES ('$nam',  '$category',  '$cnpj', '$email', '$fone',  '$end_', '$pass');");

 $query = mysqli_query($con, $sql)or die('<script>alert(erro no banco de dados)</script>');
  echo $query;

 ?>
