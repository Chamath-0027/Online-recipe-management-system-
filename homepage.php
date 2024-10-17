<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Recipe Management System</title>
    <link rel="stylesheet" href="homepage.css">
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

    <div class="main">
        <div class="container">
            <div class="maindiv"></div>
            <div class="centered">
                <h3>Main Dish</h3></div>
          </div>
    </div>
    
    <form class="form1">
        <h2 >Chinese Recipe</h2>
        <p >Chinese cuisine is incredibly diverse, 
            featuring a wide variety of flavors,
             techniques, and ingredients. It is renowned 
             for its balance of flavors, colors, and 
             textures, as well as its emphasis on 
             freshness and seasonality. Chinese 
             cooking can be roughly categorized into 
             eight regional cuisines: Cantonese, Sichuan,
             Hunan, Shandong, Jiangsu, Zhejiang, Fujian, and
             Anhui, each with its own unique style and specialty dishes.
             Overall, Chinese cuisine is a delightful culinary adventure
             that offers a rich blend of flavors and textures, making it 
             a favorite worldwide.

        </p>
    </form>
    <a href="Chinees.php">
        <div class="img6">
           
        <img src="image6.jpg" width="600" height="400">
    </a>
    </div>
    <a href="mexican.php">
        <div class="img7">
            <img src="image7.jpg" width="600" height="400">
        </div>
    </a>
        <form class="form2">
            <h2 >Mexican Recipe</h2>
            <p >Mexican cuisine is a vibrant and
             flavorful culinary tradition that
             has captivated food enthusiasts around
             the world. Known for its bold and spicy 
             flavors, Mexican dishes often feature a 
             combination of fresh ingredients such as tomatoes,
            chilies, avocados, and cilantro. Corn and beans are 
            staple ingredients, forming the basis of many 
            traditional Mexican recipes.
            Salsa, guacamole, and sour cream are 
            popular accompaniments, adding zest and 
            creaminess to many Mexican dishes. Tamales,
             burritos, ceviche, and chiles rellenos 
             are just a few examples of the diverse and 
             delicious offerings in Mexican cuisine.
    
            </p>
        </form>
        <footer>
        <div class="footer">
            <p>&copy; Recipe Management </p>
            <a href="feedback.php">Feedback</a>
            <a href="contact.php">Contract</a>
            <a href="tearms">Tearms and reference </a>
            <a href="privacy">privacy</a>
            <a href="faq.php">FAQs</a>
        </div>
    </footer>
</body>
</html>
