<?php
require_once "dbc.php"; // Include your database connection file

if (isset($_POST["submit"])) {

    $email = $_POST["Email"];
    $Message = $_POST["message"];


    // Validate fields (you can add more validation logic if needed)

    // Check if the email already exists in the database
    $sql = "SELECT * FROM contact_us WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
        exit();
    }

    // Insert data into the donations table
    $insertSql = "INSERT INTO contact_us ( Email, message) 
                  VALUES ('$email', ' $Message')";

    if (mysqli_query($conn, $insertSql)) {
        echo "<div class='alert alert-success'>Message submitted successful</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="contact.css">
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
 
      <a class="active2" href="contact.php">Contact</a>
      <a href="aboutus.php">About</a>
      <a  href="Donationpage.php">Donation</a>
  
      
      <div class="search-bar">
          <input type="text" id="search-input" placeholder="Search...">
          <button id="search-button">Search</button>
      </div>
  </div>

  <form class="form" method="post" action="contact.php">
    <div class="title">Contact us</div>
    <input type="text" placeholder="Your email" class="input" name="Email">
    <textarea placeholder="Your message" name="message"></textarea>
     <br><br>
    <button name="submit">Submit</button>
</form>


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