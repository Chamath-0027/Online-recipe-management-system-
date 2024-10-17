<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="adminpage3.css">
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
        <a class="active" href="homepage.html">Home</a>
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
        <form class="form" method="post" action="adminpage3.php">
            <div class="profile">
                <img src="user.png" alt="profile">
                <h3 style="margin-left:95px;">Admin</h3>
                <div class="admin-nav">
                    <a href="adminpage1.php">Users</a><br>
                    <a href="adminpage2.php">Recipes</a><br>
                    <a class="active" href="adminpage3.php">Feedback</a><br>
                    <a href="adminpage4.php">Contact us</a>     
                </div>
            </div>
        </form>
    </div>
    <!-- Feedback Table Section -->
    <div class="container2">
        <form class="form2" method="post" action="delete_feedback.php">
            <h3>Feedback</h3>
            <table class="feedback-table table1" style="font-size: 16px; text-align: center;">
                <tr style="height: 50px;">
                    <th>ID</th>
                    <th>Message</th>
                    <th>Delete</th>
                </tr>

                <?php
                // Include the database connection file
                require_once "dbc.php";

                // Retrieve feedback data from the database
                $sql = "SELECT * FROM feedback";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr style='height: 50px;'><td>" . $row["ID"] . "</td><td>" . $row["message"] . "</td><td><a href='delete_feedback.php?id=" . $row["ID"] . "'>Delete</a></td></tr>";
                    }
                } else {
                    echo "<tr style='height: 50px;'><td colspan='3'>No feedback available</td></tr>";
                }
                ?>
            </table>
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
