<?php

$conn = new mysqli("localhost", "root", "", "inventory_system");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM products WHERE id = $id");
    header("Location: products.php");
    exit();
}
?>
