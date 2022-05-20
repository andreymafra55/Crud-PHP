<?php
    include 'config.php';

    $data = [];

    $fp = fopen(DATA_SOURCE, 'r');
    while ($row = fgets($fp)) {
        // $data[] = $row;
        $data[] = explode(',', $row);
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid gray;
            border-collapse: collapse;
        }
        tr:nth-child(2n) {
            background: hsl(0, 0%, 90%);
        }
        td {
            padding: .5em;
        }
        form {
            margin-top: .5em;
        }
        fieldset {
            border: 2px solid black;
            box-shadow: 1px 1px 5px black;
        }
        legend {
            background: hsl(120, 100%, 90%);
            padding: 0 2em;
        }
    </style>
</head>
<body>
    <h1>Sapatos de <?= $_SESSION['username'] ?></h1>
    <table>
        <?php foreach ($data as $i => $row): ?>
            <?php if (trim($row[4]) == $_SESSION['username']): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[4] ?></td>
                    
                    <td>
                        <a href="delete.php?linha=<?= $i ?>">remover</a>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </table>
    <form action="add-sapato.php" method="POST">
        <fieldset>
            <legend>Novo Sapato</legend>
            <input type="text" name="marca" placeholder="Marca">
            <input type="text" name="modelo" placeholder="Modelo">
            <input type="text" name="cor" placeholder="Cor">
            <input type="text" name="tamanho" placeholder="Tamanho">
            <input type="submit" value="adicionar">
        </fieldset>
    </form>
    <a href="/logout.php">Sair</a>
</body>
</html>