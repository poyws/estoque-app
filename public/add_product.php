<?php
require '../config/config.php';
require '../includes/db.php';
require '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    addProduct($name, $quantity);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Adicionar Produto</title>
</head>
<body>
    <div class="container">
        <h1>Adicionar Produto</h1>
        <form method="POST">
            <label for="name">Nome do Produto:</label>
            <input type="text" name="name" required>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" required>
            <button type="submit">Adicionar</button>
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
