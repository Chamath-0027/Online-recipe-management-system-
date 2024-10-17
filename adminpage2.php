<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="adminpage2.css">
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
            <h3 style=" margin-left:95px;">Admin</h3>
            <div class="admin-nav">
                <a href="adminpage1.php">Users</a><br>
                <a class="active" href="adminpage2.php">Recipes</a><br>
                <a href="adminpage3.php">Feedback</a><br>
                <a href="adminpage4.php">Contact us</a>     
            </div>
        </div>
    </form>
</div>

<div class="container2">
    <form class="form2" method="post" action="adminpage2.html">
        <h3>Recipies</h3>
        <table class="table1">
            <tr>
              <th>Recipe Id</th>
              <th>country</th>
              <th>Recipe name</th>
            </tr>
            <tr>
              <td>01</td>
              <td>China</td>
              <td>Mushroom Mapo Tofu<br>Sichuan-style Yuxiang Aubergine<br>Lionhead Meatball Soup</td>
            </tr>
            <tr>
              <td>02</td>
              <td>Indian</td>
              <td>Spicy Indian rice<br>Akoori (Indian scrambled eggs)<br>Indian koftas with mint yogurt & flatbreads</td>
            </tr>
            <tr>
              <td>03</td>
              <td>Mexican</td>
              <td>Pork carnitas<br>Taco seasoning<br>Grilled Onion & Skirt Steak Tacos</td>
            </tr>
            


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