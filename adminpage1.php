<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="adminpage1.css">
</head>
<body style="background-color:black;">
<div class="header">
    <div class="logo">
        <img src="image4.png" alt="Logo">
    </div>
    <div>
    <a href="signpage.php">
            <button class="sign-button">Sign up</button>
            </a>
            <a href="loginpage.php">
                <button class="login-button"> Login</button>
            </a>
    </div>
</div>

<div class="topnav">
    <a class="active" href="homepage.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Recipes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Chinees.php">Chinese Recipe</a>
            <a href="mexican.php">Mexican Recipe</a>
            <a href="india.php">Indian Recipe</a>
        </div>
    </div>
    <a href="contact.php">Contact</a>
    <a href="aboutus.php">About</a>
    <a href="Donationpage.php">Donation</a>
    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search...">
        <button id="search-button">Search</button>
    </div>
</div>

<div class="container">
    <form class="form">
        <div class="profile">
            <img src="user.png" alt="profile">
            <h3 style="margin-left: 95px;">Admin</h3>
            <div class="admin-nav">
                <a class="active" href="adminpage1.php">Users</a><br>
                <a href="adminpage2.php">Recipes</a><br>
                <a href="adminpage3.php">Feedback</a><br>
                <a href="adminpage4.php">Contact us</a>
            </div>
        </div>
    </form>
</div>

<?php
require_once "dbc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["search"])) {
        $searchUsername = mysqli_real_escape_string($conn, $_POST["username"]);

        $sql = "SELECT * FROM users WHERE username = '$searchUsername'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        } else {
            echo "User not found.";
        }
    }

    if (isset($_POST["delete"])) {
        $deleteUsername = mysqli_real_escape_string($conn, $_POST["deleteUsername"]);
        $deleteSql = "DELETE FROM users WHERE username = '$deleteUsername'";
        if (mysqli_query($conn, $deleteSql)) {
            echo "User account deleted successfully.";
        } else {
            echo "Error deleting user account: " . mysqli_error($conn);
        }
    }
}
?>

<div class="container2">
    <form class="form2" method="post" action="adminpage1.php">
        <h3>User Profile</h3>
        <input class="search-bar1" type="text" name="username" placeholder="Username">
        <button class="button1" type="submit" name="search">Search</button>

        <?php if (isset($user)) : ?>
            <table class="table1">
                <tr>
                    <th>User name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><?php echo $user["username"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo $user["password"]; ?></td>
                    <td>
                        <input type="hidden" name="deleteUsername" value="<?php echo $user["username"]; ?>">
                        <button class="bdelete" type="submit" name="delete">Delete</button>
                    </td>
                </tr>
            </table>
        <?php endif; ?>
    </form>
</div>

<div class="footer">
    <p>&copy; Recipe Management </p>
    <a href="feedback.php">Feedback</a>
    <a href="contact.php">Contract</a>
    <a href="tearms">Tearms and reference </a>
    <a href="privacy">privacy</a>
    <a href="faq.php">FAQs</a>
</div>
</body>
</html>
