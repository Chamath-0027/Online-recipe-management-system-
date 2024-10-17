<!DOCTYPE html>
<html>
<head>
    <title> Grilled Onion & Skirt Steak Tacos</title>
    <link rel="stylesheet" href="recipe3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

</head>

<body style="background: linear-gradient(45deg, #9c9a9a, rgb(170, 170, 170));">
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
        <a href="Dontionpage.php">Donation</a>
        
            
            <div class="search-bar">
                <input type="text" id="search-input" placeholder="Search...">
                <button id="search-button">Search</button>
            </div>
        </div>
    <h1> Grilled Onion & Skirt Steak Tacos</h1>

    <img src="bt.jpeg" alt="Grilled Onion & Skirt Steak Tacos">

    <h2>Ingredients</h2>
    <ul>
        <li>  2 beef skirt or flank steaks (1 pound each)</li>
        <li>1 bottle (12 ounces) beer</li>
        <li>1/4 cup lime juice
            <li>3 tablespoons olive oil, divided</li>
                <li>8 spring onions or green onions</li>
                    <li>1-1/4 teaspoons salt, divided</li>
                        <li>3/4 teaspoon pepper, divided</li>
                            <li>Corn tortillas, minced fresh cilantro and lime wedges</li>
            

    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li> Pound beef with a meat mallet to tenderize. In a large bowl, mix beer, lime juice and 2 tablespoons oil until blended. Add beef to marinade; turn to coat. Refrigerate, covered, at least 30 minutes.</li>
        <li>Meanwhile, cut partially through onions, leaving tops intact. Drizzle with remaining 1 tablespoon oil; sprinkle with 1/4 teaspoon salt and 1/4 teaspoon pepper.</li>
        <li>Drain beef, discarding marinade; sprinkle with the remaining 1 teaspoon salt and 1/2 teaspoon pepper. On a greased grill rack, grill steaks and onions, covered, over medium heat or broil 4 in. from heat until meat reaches desired doneness (for medium-rare, a thermometer should read 135°; medium, 140°; medium-well, 145°) and onions are crisp-tender, 2-4 minutes on each side. Cut steak diagonally across the grain into thin slices. Serve with tortillas, onions, cilantro and lime wedges.</li>
         
      </ul>
    <div class="rating">
        <input value="5" name="rate" id="star5" type="radio">
        <label title="text" for="star5"></label>
        <input value="4" name="rate" id="star4" type="radio">
        <label title="text" for="star4"></label>
        <input value="3" name="rate" id="star3" type="radio" checked="">
        <label title="text" for="star3"></label>
        <input value="2" name="rate" id="star2" type="radio">
        <label title="text" for="star2"></label>
        <input value="1" name="rate" id="star1" type="radio">
        <label title="text" for="star1"></label>
      </div>     

      <a href="#" id="download-button">Download</button>
    </a>

    <script>
document.getElementById('download-button').addEventListener('click', function() {
    var element = document.body; // Choose the element you want to export to PDF

    html2pdf(element, {
        margin: 10,
        filename: 'recipe.pdf', // Specify the file name for the PDF
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    }).then(function (pdf) {
        pdf.save('recipe.pdf'); // Trigger the download of the PDF
    });
});
</script>
</body>
</html>
