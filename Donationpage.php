<?php
require_once "dbc.php"; // Include your database connection file

if (isset($_POST["Donate"])) {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["EmailAddress"];
    $phoneNumber = $_POST["phone"];
    $streetAddress = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];


    $anonymousDonation = isset($_POST["Identity"]) ? 1 : 0; // Check if the checkbox is checked
    $amount = $_POST["amount"];
    $DonationMessage = $_POST["DonationMessage"];

    // Validate fields (you can add more validation logic if needed)

    // Check if the email already exists in the database
    $sql = "SELECT * FROM donation WHERE EmailAddress = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
        exit();
    }

    // Insert data into the donations table
    $insertSql = "INSERT INTO donation (FirstName, LastName, EmailAddress, PhoneNumber,StreetAddress, City, ZipPostalCode, Country, AonymousDonation, DonationAmount, DonationMessage) 
    VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$streetAddress', '$city', '$zip', '$country', '$anonymousDonation', '$amount', '$DonationMessage')";
  

    if (mysqli_query($conn, $insertSql)) {
        echo "<div class='alert alert-success'>Donation successful</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="Donationpage.css">
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
        <a class="active2" href="Dontionpage.php">Donation</a>
    
        
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
    </div>

        
            <div class="testbox">
                <form method="post" action="Donationpage.php">
                  <div class="banner">
                    <h1>Donation Form</h1>
                  </div>
                  <br/>
                  <fieldset>
                    <legend>Donation Form</legend>
                    <div class="colums">
                      <div class="item">
                        <label for="fname">First Name<span></span></label>
                        <input id="fname" type="text" name="fname" />
                      </div>
                      <div class="item">
                        <label for="lname"> Last Name<span></span></label>
                        <input id="lname" type="text" name="lname" />
                      </div>
                      <div class="item">
                        <label for="address">Email Address<span></span></label>
                        <input id="address" type="text"   name="EmailAddress" />
                      </div>
                      <div class="item">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="tel"   name="phone"/>
                      </div>
                      <div class="item">
                        <label for="saddress">Street Address</label>
                        <input id="saddress" type="text"   name="address" />
                      </div>
                      <div class="item">
                        <label for="city">City</label>
                        <input id="city" type="text"   name="city" />
                      </div>
                      <div class="item">
                        <label for="zip">Zip/Postal Code</label>
                        <input id="zip" type="text"   name="zip" />
                      </div>
                      <div class="item">
                        <label for="country">Country</label>
                        <input id="country" type="text"   name="country" />
                      </div>
                     </div>
                  </fieldset>

                  <br/>
                  <fieldset>
                  <legend>Donation Details</legend>
                  <div class="colums">
                  </div>
                  <div class="checkbox">
                  <p>May we thank you publicly?</p>
                  <label><input type="checkbox" name="Identity"/>No, please keep my information anonymous
                  </label>
                  </div>
                  <div class="item">
                  <label for="amount">Donation Amount<span></span></label>
                  <input id="amount" type="number"   name="amount" />
                  </div>
                  <div class="item">
                  <label for="donation">Donation Comments</label>
                  <textarea id="donation" rows="3" name="DonationMessage"></textarea>
                  </div>
                  </fieldset>
                  <br><br>
               
                  <button class="button-type1" name="Donate">Donate</button>
                 
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