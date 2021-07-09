<?php
require "links.php";

  $host="sql111.epizy.com";
  $port=3306;
  $user="epiz_29071245";
  $password="eaShDXVhc9b";
  $dbname="epiz_29071245_capsdb";


  $con = new mysqli($host, $user, $password, $dbname);

  if (!$con){
    echo "<script>window.alert('ERROR'); window.location.href='$index';</script>";
  }
?>
