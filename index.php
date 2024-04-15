<?php
include 'pages/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Lato:wght@700&family=Montserrat:wght@500;600;700&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
        <header>
        <?php
        include './assets/header.php';
        ?>
    </header>
    <main>
        <div class="hero-section-background">
            <div class="hero-section">
                <div class="hero-left-side">
                    <div class="hero-title">
                        <p>The most unique flavor experience with our fresh sushi that make you tastebuds melt!</p>
                    </div>
                    <div class="hero-line">

                    </div>
                    <div class="hero-description">
                        <p>Deliciously fresh sushi straight from Japan to give you the 
                            best flavor experience you have ever tasted</p>
                    </div>
                    <div class="hero-buttons">
                        <div class="hero-our-menu-btn btn btn-hover">
                            <p>Our menu</p>
                        </div>
                        <div class="hero-book-a-table-btn btn btn-hover">
                            <p>Book a table</p>
                        </div>
                    </div>
                    <div class="hero-our-reviews">
                        
                    </div>
                </div>
                <div class="hero-right-side">
                    <img class="first-image-hero" src="assets/sushi1.jpg" alt="err 404">
                    <img class="second-image-hero" src="assets/sushi2.jpg" alt="err 404">
                    <img class="third-image-hero" src="assets/sushi3.jpg" alt="err 404">
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<?php 
include "./pages/conn.php";

if(isset($_POST['submit'])) {

	// Count total files
	$countfiles = count($_FILES['files']['name']);

	// Prepared statement
	$query = "INSERT INTO images (name,image) VALUES(?,?)";

	$statement = $connection->prepare($query);

	// Loop all files
	for($i = 0; $i < $countfiles; $i++) {

		// File name
		$filename = $_FILES['files']['name'][$i];
	
		// Location
		$target_file = 'assets/uploads/'.$filename;
	
		// file extension
		$file_extension = pathinfo(
			$target_file, PATHINFO_EXTENSION);
			
		$file_extension = strtolower($file_extension);
	
		// Valid image extension
		$valid_extension = array("png","jpeg","jpg");
	
		if(in_array($file_extension, $valid_extension)) {

			// Upload file
			if(move_uploaded_file(
				$_FILES['files']['tmp_name'][$i],
				$target_file)
			) {

				// Execute query
				$statement->execute(
					array($filename,$target_file));
			}
		}
	}
	
	echo "File upload successfully";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>Geeks for geeks Image Upload</title>
</head>

<body>
	<h1>Upload Images</h1>

	<form method='post' action=''
		enctype='multipart/form-data'>
		<input type='file' name='files[]' multiple />
		<input type='submit' value='Submit' name='submit' />
	</form>

	<a href="assets/uploads/view.php">|View Uploads|</a>
</body>

</html>
