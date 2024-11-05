<?php
require '../config/config.php';
require '../includes/db.php';
require '../includes/functions.php';

$products = getProducts();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Gerenciamento de Estoque</title>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Estoque</h1>
        <a href="add_product.php">Adicionar Produto</a>
        <a href="manage_stock.php">Gerenciar Estoque</a>
        <a href="report.php">Gerar Relatório</a>

        <h2>Produtos no Estoque</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
