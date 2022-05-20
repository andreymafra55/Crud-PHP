<?php
    include 'config.php';

    $marca = $_POST['marca'];
    $modelo=$_POST['modelo'];
    $cor=$_POST['cor'];
    $tamanho=$_POST['tamanho'];


    $fp = fopen(DATA_SOURCE, 'a');
    $row = implode(',', [$marca,$modelo,$cor,$tamanho, $_SESSION['username']]);
    fwrite($fp, $row . PHP_EOL);

    header('location: index.php');
?>