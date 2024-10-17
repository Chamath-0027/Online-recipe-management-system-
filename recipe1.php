<!DOCTYPE html>
<html>
<head>
    <title> Taco seasoning</title>
    <link rel="stylesheet" href="recipe1.css">
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




    <h1>Taco seasoning</h1>

    <img src="ts.jpeg" alt="taco seasoning">

    <h2>Ingredients</h2>
    <ul>
        <li>1 tbs salt flakes, lightly crushed </li>
        <li>1 tbs ground cumin</li>
        <li> 1 tbs cornflour</li>
        <li> 2 tsp dried oregano</li>
        <li>2 tsp ground coriander </li>
        <li> 2 tsp ground paprika (hot or sweet)</li>
        <li>2 tsp garlic powder</li>
        <li>2 tsp onion powder</li>
        <li>1 tsp caster sugar</li>
    </ul>

    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>step 1- Gather All Ingredients</li>
        <li>step 2-Mix chili powder, cumin, salt, pepper, paprika, garlic powder, onion powder, red pepper flakes, and oregano together in a small bowl until combined.</li>
            <li>step 3- Store in an airtight container.</li>
            
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
