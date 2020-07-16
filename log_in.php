<?php
    $name = (string) htmlspecialchars($_POST['name']);
    $cnpj = (string) htmlspecialchars($_POST['cnpj']);
    $end = (string)  htmlspecialchars($_POST['endereco']);
    $email= (string) htmlspecialchars($_POST['email']);
    $fone = (string) htmlspecialchars($_POST['telefone']);
    $pass = (string) htmlspecialchars($_POST['passwd']);

    echo $name;


?>