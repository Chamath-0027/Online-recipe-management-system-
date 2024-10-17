<?php
session_start();

if (isset($_POST["log"])) {
    // Include your database connection file
    require_once "dbc.php";

    // Get user input from the form
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query to check if the provided username and password match in admins table
    $adminQuery = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $adminResult = mysqli_query($conn, $adminQuery);

    if ($adminResult) {
        // Check if a matching admin is found
        if (mysqli_num_rows($adminResult) == 1) {
            $admin = mysqli_fetch_assoc($adminResult);
            // Password is correct
            $_SESSION["admin_id"] = $admin["ID"];
            $_SESSION["admin_username"] = $username;
            header("Location: adminpage1.php");
            exit();
        } else {
            // If no admin found, check in the users table
            $userQuery = "SELECT * FROM users WHERE username='$username'";
            $userResult = mysqli_query($conn, $userQuery);

            if ($userResult) {
                // Check if a matching user is found
                if (mysqli_num_rows($userResult) == 1) {
                    $user = mysqli_fetch_assoc($userResult);
                    // Verify the password for user
                    if (password_verify($password, $user["password"])) {
                        // Password is correct for user
                        $_SESSION["user_id"] = $user["ID"];
                        $_SESSION["username"] = $username;
                        header("Location: homepage.php");
                        exit();
                    } else {
                        echo "Invalid password for user. Please try again.";
                    }
                } else {
                    echo "Invalid username. Please try again.";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="wrapper">
        <form class="form" method="post" action="loginpage.php">
            <h1 class="title">Login</h1>
            <div class="inp">
                <input type="text" name="username" id="" class="input" placeholder="Username">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" id="" class="input" placeholder="Password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button class="submit" name ="log">Login</button>
            <p class="footer">Don't have an account? <a href="signpage.php" class="link">Please Sign Up</a></p>
        </form>
        <div></div>
        <div class="banner"></div>
    </div>
</body>
</html>
