<?php
include 'conn.php';
$data = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'id' => $_POST['id_product'],
    'description' => $_POST['description']
];
$sql = "UPDATE products SET name=:name, price=:price, description=:description WHERE id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('location: ../index.php');
?>