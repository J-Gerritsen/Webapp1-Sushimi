<?php
include "../../pages/conn.php";
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
		
	<img src="<?=$imagePath?>"
		title="<?=$image['name'] ?>"
		width='200' height='200'>
	<?php
	}
	?> 
</body>

</html>
