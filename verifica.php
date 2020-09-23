<?php
require "links.php";

  session_start();
  if(!isset($_SESSION['id_user']) || !isset($_SESSION['name'])){
    echo "<script>window.location.replace('$login');</script>";
  }

?>