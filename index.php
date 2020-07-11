 <?php
 
 
 $host="localhost";
 $port=3306;
 $user="root";
 $password="root";
 $dbname="login";
 
 
   $con = mysqli_connect ($host, $user, $password, $dbname) or die('Erro de conexão!');
 
  echo $con;   
   
   
 ?>