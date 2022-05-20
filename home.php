<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: index.php?err=0');
        exit();
    }
    header('location: livros/');
?>
<h1>Seja bem vindo(a), <?= $_SESSION['name'] ?> (<?= $_SESSION['username'] ?>)</h1>
<a href="logout.php">Sair</a>