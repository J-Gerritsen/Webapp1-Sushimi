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



<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</head>
<body>
<header class="header">
    <a class="logo" href="../index.php">sushi<section class="imi">mi</section></a>
    <nav class="main-mav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link hover" href="../index.php">Home</a></li>
            <li><a class="main-nav-link hover" href="order_page.php">Menu</a></li>
            <li><a class="main-nav-link hover" href="#">Book</a></li>
            <li><a class="main-nav-link hover" href="#">Contact</a></li>
            <li><a class="main-nav-link hover" href="login.php">Login</a></li>
        </ul>
    </nav>
</header>
    <main class="main">
        <div class="log-in-title">
        <h1>Log in</h1>
        </div>
        <div class="login-container">
            <div class="login-container-left-side">
                <img class="sushi-sandwich" src="../assets/sushi_sandwich-1.jpg" alt="">
            </div>
            <div class="login">
                <form class='register_form' name="login_logic" action="login_logic.php" method="POST">
                    <div class="row">
                        <input type="text" placeholder="Username" name="username" required/>
                    </div>
                    <div class="row">
                        <!-- <myFunction/> -->
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Password" required id="myInput">
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                    </div>
                    <div class="row">
                    <input type="submit" name="submit" value='send'>
                    <a href='register.php'>register</a>
                </form>
            </div>
        </div>
</main>
</body>
</html>