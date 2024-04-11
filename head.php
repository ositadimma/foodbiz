<?php
include 'connection.php';
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Merienda:wght@300..900&family=Oswald:wght@200..700&family=Ultra&family=Varela&display=swap" rel="stylesheet">
</head>
<body >
    <nav class="nav_frame">
        <div style='padding-left: 10px;'>
            <img class='logo' src="images/logo.jpg" alt="">
        </div>
        <div class="options_right">
        <div class="options">
            <a class="nav_cut" href="index.php">home</a>
            <?php if(isset($_SESSION['foodbizcategory'])&&$_SESSION['foodbizcategory']=='admin'){
                echo '<a class="nav_cut" href="pages/admin/recipes.php">admin</a>';
            } 
            ?> 
            <?php if(isset($_SESSION['foodbizcategory'])&&$_SESSION['foodbizcategory']=='chef'){
                echo '<a class="nav_cut" href="pages/chef/manage_recipe.php">chef</a>';
            } 
            ?> 
            <a class="nav_cut" href="recipes.php">recipes</a>
            <a class="nav_cut">posts</a>
            <a class="nav_cut">about</a>
            <a class="nav_cut" href="blog.php">contact us</a>
        </div>
        <div class="options">
            <a class="nav_cut" href=""><?php if(isset($_SESSION['foodbizloggedin'])&&$_SESSION['foodbizloggedin']=='true'){
                echo 'welcome '.$_SESSION['foodbizuserid'];
            } 
            ?> </a>
            <?php if(!isset($_SESSION['foodbizloggedin']) || $_SESSION['foodbizloggedin']!='true'){
            echo  '<a class="nav_cut" href="signup.php">Sign Up<a>';
            } 
            ?> </a>
            <?php if(!isset($_SESSION['foodbizloggedin']) ||$_SESSION['foodbizloggedin']!='true'){
                echo '<a class="nav_cut" href="login.php">Sign In<a>';
            } 
            ?> </a>
            <?php if(isset($_SESSION['foodbizloggedin'])&&$_SESSION['foodbizloggedin']=='true'){
                echo '<a class="nav_cut" href="logout.php">Log Out<a>';
            } 
            ?> </a>
        </div>
        </div>
    </nav>
</body>
</html>