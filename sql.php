<?php
require "links.php";

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="root";
$dbname="loginusers";


  $con = mysqli_connect ($host, $user, $password);

  if (!$con){
    echo "<script>window.alert('ERROR') window.location.href='$index'</script>";
  }
  
  
?>
