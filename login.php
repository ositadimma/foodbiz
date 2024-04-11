<?php
include 'connection.php';
session_start();

//Values 
if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}




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
        <div class="register_form">
        <h1>Sign In</h1>
        <form method="post" action="login.php">
            <input type="hidden" name="signup" value="signup">
            <label class='input_label'>Email</label><br>
            <input class='auth_input' placeholder='Email address..' type="text" type="email" name="email" required><br>
            <label class='input_label'>Password</label><br>
            <input class='auth_input' placeholder='Password..' type="password" name="password" required><br>
           <div>
           <?php
                    if(isset($_POST['email']) && isset($_POST['password']) ){
                        $sql= "SELECT name, password, category, email from users where email= '$email'";
                        $result = mysqli_query($mysqli, $sql);
                        $row = $result -> fetch_array(MYSQLI_NUM);
                        if($row!=[]){
                            if ($password==$row[1]) {
                                $_SESSION['foodbizloggedin'] = "true";
                                $_SESSION['foodbizuserid'] = $row[0];
                                $_SESSION['foodbizuser'] = $row[3];
                                $_SESSION['foodbizcategory'] = $row[2];
                                header("Location: index.php");
                            } else {
                                echo "invalid username or password";
                            }
                        } else {
                            echo "invalid username or password";
                        }
                    }
                    mysqli_close($mysqli);
                ?>
                </div>
            <div>
            <input class='submit_auth' type="submit" value="Sign In">
            </div>            
        </form>
         </div>
        <img class="layer_bg" src="images/auth.jpg" alt="">
        
    </div>
</body>
</html>