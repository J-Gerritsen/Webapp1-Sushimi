<?php
include "conn.php"
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
<header>
    <?php
        include '../assets/header.php';
    ?>
</header>
    <main>
        <div class="order-page-container">
            <div class="item-list"></div>
            <div class="order-page-right-side">
                <div class="hero-section-order-page">
                    <div class="hero-section-order-page-left-side">
                        <div class="title-order-page">
                            <p>Enjoy Delicious sushi from our menu!</p>
                        </div>
                        <div class="description-order-page">
                            <p>Try our most popular dishes </p>
                        </div>
                    </div>
                    <div class="hero-section-order-page-right-side">

                    </div>  
                </div>
                <div class="order-section">

                <?php
                include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
	"width=device-width, initial-scale=1.0"> 
</head>

<body>
	<?php
	
	$stmt = $connection->prepare('select * from images');
	$stmt->execute();
	$imagelist = $stmt->fetchAll();

	foreach($imagelist as $image) {
        $imagePath = str_replace('assets/uploads/', '', $image['image']);
	?>
		
	<img src="<?=$image['image']?>"
		title="<?=$image['name'] ?>"
		width='200' height='200'>
	<?php
	}
	?> 
</body>

</html>
                    <?php
                        $stmt = $connection->query("SELECT * FROM products, images");

                        while ($row = $stmt->fetch())
                        {
                            echo '<div class="sushi-container">';
                            echo '<div class="name-sushi">' . $row['name']."<br />\n";
                            echo '<div class="price-sushi">' . $row['description']."<br />\n";
                            echo '<div class="price-sushi">' . $row['price']."<br />\n";
                            // echo "<img src='".$row['img'] ."'>";
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>