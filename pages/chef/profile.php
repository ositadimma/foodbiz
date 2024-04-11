<?php
include '../../connection.php';
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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body >
    <div style='background-color: #f8fae4;' class="layer0">
        <div class='nav_layer'>
        <?php
        include "head.php";
        ?>
        </div>
        <div class="recipe_top">
        <img class='recipe_logo' src="images/logo.png" alt="">
         </div>
         <?php
          include 'recipetab.php';
          ?>
          <div>
            <?php
               $query0= "SELECT name, content from recipes";
               $data0 = mysqli_query($mysqli, $query0);
               $data0Array = $data0 -> fetch_array(MYSQLI_NUM);
               for ($i=0; $i <sizeof($data0Array) ; $i++) { 
                # code...
                echo '<div>'.$data0Array[$i].'</div>';
               }
              //  if($data0Array==[]){
              //      $sql = "INSERT INTO users (email, name, password, category) VALUES ('$email', '$name', '$password', '$category')";
              //      $result = mysqli_query($mysqli, $sql);
              //      header("Location: login.php");
              //      die();
              //      // // Fetch all
              //      // mysqli_fetch_all($result, MYSQLI_ASSOC);
              //  }  
            ?>
          </div>
    </div>
</body>
<script src='js/recipe.js'></script>
  
</html>