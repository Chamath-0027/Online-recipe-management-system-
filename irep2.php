<!DOCTYPE html>
<html>
<head>
    <title>Akoori (Indian scrambled eggs)</title>
    <link rel="stylesheet" href="irep2.css">
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




    <h1>Akoori (Indian scrambled eggs) </h1>

    <img src="ise.jpg" alt="Akoori (Indian scrambled eggs)">

    <h2>Ingredients</h2>
    <ul>

<li>1 green or red chilli, deseeded and finely chopped</li>
<li>2 garlic cloves, crushed</li>
<li>¼ tsp ground cumin</li>
<li>¼ tsp garam masala</li>
<li>good pinch of turmeric</li>
<li>2 large tomatoes, deseeded and finely chopped</li>
<li>7 eggs, beaten</li>
<li>small pack coriander, roughly chopped</li>
<li>4 chapatis (or gluten-free alternative), lightly toasted, to serve</li>
<li>1 tbsp butter</li>
<li>1 small red onion, finely chopped</li>
      
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            Heat a large frying pan over a low-medium heat and add the butter. Gently fry the onion, chilli and garlic until the onion is soft – about 5 mins. Add the spices and cook for 1-2 mins more, stirring around the pan until aromatic.</li>
        <li>STEP 2<br>
            Add the tomatoes, cook for 1 min, then pour in the eggs and lower the heat. Stir slowly to scramble the eggs as they cook, and remove from the heat while they are still a little runny. Continue stirring off the heat for 1 min more until the eggs are just set.</li>
        <li>STEP 3<br>
            Stir through the coriander and serve with chapatis for a delicious breakfast or brunch.</li>
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
