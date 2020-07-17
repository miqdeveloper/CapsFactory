 <?php

 require 'links.php';
 require 'sql.php';

 if($_SERVER['REQUEST_METHOD'] != 'POST'){
     echo '<h1> Erro no method</h1>';
 }

 $email = (string) md5(htmlspecialchars(trim($_POST["email"])));
 $pass = (string) md5(htmlspecialchars(trim($_POST["senha"])));

 if(!$email || !$pass) {
     echo "<script>
                window.alert('Usuario ou senha vazios!');
                window.location.href='$login'
            </script>";
 }
#Fazer consulta e autenticar usuario
 $query = "SELECT  login_email FROM login_users WHERE login_email = '$email'";
 $sql = mysqli_query($con, $query)  or die("<script>window.alert('ERRO NO BANCO DE DADOS') window.location.href='$index'</script>");
 $num = (int)mysqli_num_rows($sql);

 if($num > 0){
    $query2 = "SELECT  login_pass FROM login_users WHERE login_pass = '$pass'";
    $sql2 = mysqli_query($con, $query)  or die("<script>window.alert('ERRO NO BANCO DE DADOS') window.location.href='$index'</script>");
    $num2 = (int)mysqli_num_rows($sql);

    if((int)$num2 > 0){
        session_start();
        header("Location: dashboardUser.html");
    }
    else{

    echo "<script>
            window.alert('E-amail não encontrado!')
            window.location.href='$index';
        </script>";
    exit;
    }
 }
 else {

    echo "<script>
            window.alert('E-amail ou Senha não encontrados!');
            window.location.href='$index';
       </script>";
    exit;     
 }

 ?>