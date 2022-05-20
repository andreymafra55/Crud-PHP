<?php
    include 'config.php';  
    $linha = $_GET['linha'];

    // READ
    $data = [];

    $fp = fopen(DATA_SOURCE, 'r');
    while ($row = fgets($fp)) {
        $data[] = $row;
    }

    // REWRITE
    $fp = fopen(DATA_SOURCE, 'w');
    foreach($data as $idx => $row) {
        if ($idx == $linha) {
            continue;
        }
        fwrite($fp, $row);
       
    }

    header('location: index.php');
?>