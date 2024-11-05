<?php
require '../config/config.php';
require '../includes/db.php';
require '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    updateProduct($id, $quantity);
    header('Location: index.php');
}

$products = getProducts();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Gerenciar Estoque</title>
</head>
<body>
    <div class="container">
        <h1>Gerenciar Estoque</h1>
        <h2>Atualizar Produtos</h2>
        <form method="POST">
            <label for="id">Selecione o Produto:</label>
            <select name="id" required>
                <?php foreach ($products as $product): ?>
                    <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="quantity">Nova Quantidade:</label>
            <input type="number" name="quantity" required>
            <button type="submit">Atualizar</button>
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
