<?php

// Adiciona um novo produto
function addProduct($name, $quantity) {
    $db = dbConnect();
    $stmt = $db->prepare("INSERT INTO products (name, quantity) VALUES (:name, :quantity)");
    $stmt->execute(['name' => $name, 'quantity' => $quantity]);
}

// Atualiza a quantidade de um produto
function updateProduct($id, $quantity) {
    $db = dbConnect();
    $stmt = $db->prepare("UPDATE products SET quantity = :quantity WHERE id = :id");
    $stmt->execute(['id' => $id, 'quantity' => $quantity]);
}

// Obtém todos os produtos
function getProducts() {
    $db = dbConnect();
    $stmt = $db->query("SELECT * FROM products");
    return $stmt->fetchAll();
}

// Gera relatório de inventário
function generateReport() {
    $db = dbConnect();
    $stmt = $db->query("SELECT * FROM products");
    return $stmt->fetchAll();
}
?>
