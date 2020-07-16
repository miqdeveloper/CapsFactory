 <?php

 require 'links.php';
 require 'sql.php';

 if($_SERVER['REQUEST_METHOD'] != 'POST'){
     echo '<h1> Erro no method</h1>';
 }

 $email = (string) md5(htmlspecialchars($_POST['email']));
 $pass = (string) md5(htmlspecialchars($_POST['senha']));

 if(!$email || !$pass) {
     echo "<script>
                window.alert('Usuario ou senha vazios!');
                window.location.href='$login'
            </script>";
 }
#Fazer consulta e autenticar usuario

 $sql = ""; 

   
 ?>