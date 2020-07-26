<?php
require "links.php";

  session_start();
  if(!isset($_SESSION['id_user']) || !isset($_SESSION['name'])){
    header("Location: ".$login);
  }

?>