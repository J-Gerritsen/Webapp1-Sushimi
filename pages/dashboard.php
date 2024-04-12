<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit();
    }
    echo "egth";
    
if ($_SESSION['id'] <2) {
    echo'sergawgr';
} 

elseif ($_SESSION['id'] < 3) {
    echo'qwer';
}

elseif ($_SESSION['id'] < 4) {
    echo'qwert';
}
?>


<form action="user_delete_logic.php" name='user_delete_logic' method="POST">
    <label>delete user</label>
    <input type="text" name='id_user' placeholder="id" required>
    <input type="submit" value="register">
</form>

<?php
include 'conn.php';
$stmt = $connection->prepare("SELECT * FROM products");
$stmt->execute();
$data = $stmt->fetchAll();

foreach ($data as $row) {
    echo $row['name'];
    echo "<a href='product_update.php?id=".$row['id']."'>Update</a>";
    echo "<a href='product_delete.php?id=".$row['id']."'>Delete</a>";
    }
?>