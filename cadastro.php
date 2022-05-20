<?php
    session_start();
    define('DATA_SRC', 'users.csv');

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_pw = md5($password);
    $telefone=$_POST['telefone'];
    $redesocial=$_POST['rede'];
    
    
    $fp = fopen(DATA_SRC, 'a');
    $row = implode(',', [$username,$hashed_pw,$email,$telefone,$redesocial]);
    fwrite($fp, $row . PHP_EOL);
    header('location: index.php');