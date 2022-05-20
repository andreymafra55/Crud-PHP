<?php
include 'conf.php';


$data = [];
$fp = fopen(DATA_SRC, 'r');
while ($row = fgets($fp)) {
     $data[] = $row;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página inicial</h1>
    <?php if (($_GET['err'] ?? $_GET['erro'] ?? -1) == '0'): ?>
        <p>Usuário não autenticado</p>
    <?php endif ?>
    <form action="login.php" method="POST">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="user" placeholder="username">
            <input type="password" name="passwd" placeholder="senha">
            <input type="submit">
        </fieldset>
    </form>

    <form action="cadastro.php" method="POST">
        <fieldset>
            <legend>Cadastro</legend>
            <input type="text" name="username" placeholder="Usuario">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <input type="number" name="telefone" placeholder="Telefone">
            <input type="text" name="rede" placeholder="Rede Social">
            <input type="submit" value="adicionar">
        </fieldset>
    </form>
</body>
</html>