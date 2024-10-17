<?php
require_once "dbc.php"; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = mysqli_real_escape_string($conn, $_POST["message"]); // Sanitize user input

    // Insert data into the feedback table
    $insertSql = "INSERT INTO feedback (message) VALUES ('$message')";

    if (mysqli_query($conn, $insertSql)) {
        echo "<div class='alert alert-success'>Message submitted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="feedback.css">
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
      <a  href="Dontionpage.php">Donation</a>
  
      
      <div class="search-bar">
          <input type="text" id="search-input" placeholder="Search...">
          <button id="search-button">Search</button>
      </div>
  </div>

  <form class="form" method="post" action="feedback.php">
    <div class="title">Feedback</div>
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