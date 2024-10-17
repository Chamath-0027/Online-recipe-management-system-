<!DOCTYPE html>
<html>
<head>
    <title>Spicy Indian rice</title>
    <link rel="stylesheet" href="irep1.css">
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




    <h1> Spicy Indian rice </h1>

    <img src="sir.jpg" alt="Spicy Indian rice">

    <h2>Ingredients</h2>
    <ul>

    <li>a mugful of American long grain rice</li>
    <li>2 onions, sliced</li>
    <li>2 tbsp sunflower oil</li>
    <li>½ tsp turmeric</li>
    <li>1 cinnamon stick</li>
    <li>6 cardamom pods</li>
    <li>1 tsp cumin seeds</li>
    <li>large handful of sultanas and roasted cashew nuts</li>
      
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            Fry the onions in the sunflower oil in a large frying pan for 10-12 minutes until golden. </li>
        <li>STEP 2<br>
            Fill a roomy saucepan with water, bring to the boil and tip in a heaped teaspoon of salt - the water will bubble furiously. Add turmeric and the cinnamon stick to the water. Pour in the rice, stir once and return to the boil, then turn the heat down a little so that the water is boiling steadily, but not vigorously. Boil uncovered, without stirring (this makes for sticky rice) for 10 minutes. Lift some out with a slotted spoon and nibble a grain or two. If they're too crunchy, cook for another minute and taste again. They should be tender but with a little bite. Drain the rice into a large sieve and rinse by pouring over a kettle of very hot water </li>
        <li>STEP 3<br>
            Stir the crushed seeds of the cardamom pods into the onions with the cumin seeds and fry briefly. </li>
        <li>STEP 4<br>
            Toss in a large handful of sultanas and roasted cashew nuts, then the hot drained rice. This is great with curry and will also give an exotic edge to grilled meat or fish.</li>
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
