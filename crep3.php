<!DOCTYPE html>
<html>
<head>
    <title>Mushroom Mapo Tofu </title>
    <link rel="stylesheet" href="crep3.css">
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




    <h1> Mushroom Mapo Tofu</h1>

    <img src="mmt.jpg" alt="Mushroom Mapo Tofu">

    <h2>Ingredients</h2>
    <ul>
        <li> 400g fresh firm tofu block</li>
        <li>2 tbsp rapeseed oil</li>
        <li>2 garlic cloves, finely chopped</li>
        <li>2.5cm piece ginger, peeled and finely grated</li>
        <li>1 red chilli, deseeded and finely chopped</li>
        <li>150g fresh shitake mushrooms, sliced to 1cm strips</li>
        <li>1 tsp dry toasted whole Sichuan pepper</li>
        <li>1 tbsp chilli bean paste</li>
        <li>2 tbsp dark soy sauce</li>
        <li>2 tbsp Shaoxing rice wine or dry sherry</li>
        
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            Drain the tofu and press gently with kitchen paper to remove any excess moisture. Alternatively, you could place the tofu on a clean tea towel, place a clean medium chopping board over the top and leave for 10 mins to press out any excess moisture. Slice into 1.5 x 1.5cm sized chunks.</li>
        <li>STEP 2<br>
            Mix all of the sauce ingredients together in a jug.</li>
        <li>STEP 3<br>
            Heat a wok over a high heat and drizzle in the rapeseed oil. Add the garlic, ginger and chillies and stir for a few seconds. Tip in the mushrooms and stir-fry for a few seconds, then add the Sichuan pepper and the tofu, gently stirring. Add the chilli bean paste and dark soy sauce, followed by the Shaoxing rice wine or sherry. Pour in the sauce ingredients, stir everything to combine, and bring to the bubble, cooking for 1 min.</li>
        <li>STEP 4<br>
            Transfer to a serving plate and sprinkle over the ground toasted Sichuan pepper and spring onions to serve.</li>
    
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
