 <?php
 
 
 $host="localhost";
 $port=3306;
 $socket="";
 $user="root";
 $password="root";
 $dbname="login";
 
 
   $con = mysqli_connect ($host, $user, $password, $dbname);
 
   if (!$con){
     echo "<script>window.alert('ERROR') window.location.href='$index'</script>";
   }
   
   
 ?>