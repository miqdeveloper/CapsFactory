<?php
require "links.php";

  $host="127.0.0.1";
  $port=3306;
  $user="teste";
  $password="mr.robotd23";
  $dbname="loginusers";


  $con = new mysqli($host, $user, $password, $dbname);

  if (!$con){
    echo "<script>window.alert('ERROR') window.location.href='$index'</script>";
  }

  
?>
