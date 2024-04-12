<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM products WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Lato:wght@700&family=Montserrat:wght@500;600;700&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<form class='register_form' name="product_update_logic" action="product_update_logic.php" method="POST">
                    <div class="row">
                        <input type="text" name="id_product" value="<?php echo $product['id']; ?>" required/>
                    </div>
                    <div class="row">
                    <input type="text" name="name" value="<?php echo $product['name']; ?>" required/>
                    </div>
                    <div class="row">
                    <input type="text" name="price" value="<?php echo $product['price']; ?>" required/>
                    </div>
                    <div class="row">
                    <input type="text" name="description" value="<?php echo $product['description']; ?>" required/>
                    </div>
                    <div class="row">
                    <input type="submit" value='update product'>
                </form>
</body>
</html>