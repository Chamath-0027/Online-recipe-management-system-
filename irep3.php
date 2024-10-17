<!DOCTYPE html>
<html>
<head>
    <title>Indian koftas with mint yogurt & flatbreads</title>
    <link rel="stylesheet" href="irep3.css">
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




    <h1>Indian koftas with mint yogurt & flatbreads</h1>

    <img src="ikm.jpg" alt="Indian koftas with mint yogurt & flatbreads">

    <h2>Ingredients</h2>
    <ul>
        
        <li>500g lamb mince</li>
        <li>3 tbsp tikka curry paste</li>
        <li>2 tbsp mango chutney</li>
        <li>2 garlic cloves, finely grated</li>
        <li>thumb-sized piece ginger, finely grated</li>
        <li>225g Greek-style yogurt</li>
        <li>1 ½ tbsp mint sauce</li>
        <li>8 flatbreads</li>
        <li>4 tomatoes, sliced</li>
        <li>2 Little Gem lettuces, shredded</li>

      
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            In a large bowl, mix the lamb mince with the curry paste, mango chutney, garlic and ginger. Season a little and roll into 20 oval balls. Heat a large, non-stick frying pan – you shouldn’t need any oil, as lamb mince is quite fatty. Cook the koftas in batches for 2-3 mins – be careful as they are quite fragile.</li>
        <li>STEP 2<br>
            Heat oven to 200C/180C fan/ gas 6. Transfer the koftas to a baking tray and put in the oven for 10 mins, adding the flatbreads for the final 5 mins. Mix the yogurt with the mint sauce. Serve the koftas wrapped in a flatbread with some minty yogurt, tomato and lettuce.</li>
 
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
