<?php
include 'connection.php';
session_start();
// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
// $result = mysqli_query($mysqli, $sql);


// // Fetch all
// mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// mysqli_free_result($result);

// mysqli_close($mysqli);
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
</head>
<body >
    <div class="layer0">
        <div class="opaquecover"></div>
        <div class='nav_layer'>
        <?php
        include "head.php";
        ?>
        </div>
        <div class="first_text">
        
            <div class='heading'>Enjoy a world of exclusive spices and flavour</div>
            <button class="first_button">Get started</button>
         </div>
        <img class="first_background" src="images/pexels-lisa-fotios-1279330.jpg" alt="">
        
    </div>
</body>
</html>