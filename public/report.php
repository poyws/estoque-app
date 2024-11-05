<?php
require '../config/config.php';
require '../includes/db.php';
require '../includes/functions.php';

$report = generateReport();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Relatório de Inventário</title>
</head>
<body>
    <div class="container">
        <h1>Relatório de Inventário</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
            </tr>
            <?php foreach ($report as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
