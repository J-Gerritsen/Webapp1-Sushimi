<?php
$_POST['naam'];

 if($_POST['naam'] < 18) {
    header("location: ../index.php");
    }

    else {
        echo'legal';
    }
?>