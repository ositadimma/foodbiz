<?php
include 'connection.php';
session_start();

//Values 
if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['name'])){
    $name= $_POST['name'];
} else {
    $name= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}

if(isset($_POST['second_pass'])){
    $repeatpass= $_POST['second_pass'];
} else {
    $repeatpass= '';
}

if(isset($_POST['category'])){
    $category= $_POST['category'];
} else {
    $category= '';
}


// post data
if(isset($_POST['second_pass']) && $repeatpass!='' && $repeatpass==$password){
    $query0= "SELECT name, password, category from users where email= '$email'";
    $data0 = mysqli_query($mysqli, $query0);
    $data0Array = $data0 -> fetch_array(MYSQLI_NUM);
    if($data0Array==[]){
        $sql = "INSERT INTO users (email, name, password, category) VALUES ('$email', '$name', '$password', '$category')";
        $result = mysqli_query($mysqli, $sql);
        header("Location: login.php");
        die();
    } 
    
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
<body>
    <div class="layer0">
        <div class="opaquecover"></div>
        <div class="register_form">
        <h1>Sign Up</h1>
        <form method="post" action="signup.php">
            <input type="hidden" name="signup" value="signup">
            <label class='input_label'>Full name</label><br>
            <input class='auth_input' placeholder='Full name..' type="text" name="name" required><br>
            <label class='input_label'>Email</label><br>
            <input class='auth_input' placeholder='Email address..' type="text" type="email" name="email" required><br>
            <label class='input_label'>Password</label><br>
            <input class='auth_input' placeholder='Password..' type="password" name="password" required><br>
            <label class='input_label'>Repeat Password</label><br>
            <input class='auth_input' placeholder='Password..' type="password" name="second_pass" required><br>
            <label class='input_label'>User Category</label><br>
            <select name="category" class='mid-select' id="">
                <option disabled selected><span style='font-size: 12px'>select user category</span></option>
                <option value="seeker" >Recipe seeker</option>
                <option value="chef">Chef</option>
            </select>
            <div>
            <input class='submit_auth' type="submit" value="Sign Up">

            </div>            
        </form>
         </div>
        <img class="layer_bg" src="images/auth.jpg" alt="">
        
    </div>
</body>
</html>