<?php

require_once "dbc.php";


   if (isset($_POST["signup"])) {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];


    // Validate password length
    if (strlen($password) < 5) {
        echo "<div class='alert alert-danger'>Password must be at least 8 characters long</div>";
        exit();
    }

    // Validate username length
    if (strlen($userName) <5) {
        echo "<div class='alert alert-danger'>Username must be at least 8 characters long</div>";
        exit();
    }


    // Check if the email already exists in the database
 

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
        exit();
    }

    // Insert data into the user table
   // Insert data into the user table

   

     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     $insertSql = "INSERT INTO users (userName,Email,Password) VALUES ('$userName',  '$email','$hashedPassword')";

    if (mysqli_query($conn, $insertSql)) {
        echo "<div class='alert alert-success'>Registration successful</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login Page</title>
    <link rel="stylesheet" href="signpage.css">
  
    
</head>
<body>
    <div class="form-box">
        <form class="form" method="post" action="signpage.php">
            <span class="title">Sign up</span>
            <span class="subtitle">Create a free account with your email.</span>
            <div class="form-container">
              <input type="text" class="input" name="username" placeholder="User Name">
                    <input type="email" class="input" name="email" placeholder="Email">
                    <input type="password" class="input" name="password" placeholder="Password">
            </div>
            <button type= "submit" name="signup">Sign up</button>
        </form>
        <div class="form-section">
          <p>Have an account? <a href="loginpage.php">Log in</a> </p>
        </div>
        </div>

</body>
</html>
