<!DOCTYPE html>
<html>
<head>
    <title>Lionhead meatball soup</title>
    <link rel="stylesheet" href="Crecipe.css">
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




    <h1> Lionhead meatball soup </h1>

    <img src="lms.jpeg" alt="Lionhead meatball soup">

    <h2>Ingredients</h2>
    <ul>
        <li>500g lean pork mince</li>
        <li>4 garlic cloves, finely minced</li>
        <li>2 tbsp grated ginger</li>
        <li>1 pinch of ground white pepper</li>
        <li>50ml shaoxing rice wine or dry sherry</li>
        <li>1 tbsp dark soy sauce</li>
        <li>2 tbsp light soy sauce</li>
        <li>1 tbsp toasted sesame oil</li>
        <li>1 egg, beaten</li>
        <li>1 tbsp cornflour</li>        
        <li>For the soup broth</li>
        <li>500ml vegetable stock</li>
        <li>5 dried Chinese mushrooms slices</li>
        <li>200g Chinese leaf, washed, quartered lengthways from leaf to stem</li>
        <li>1 tbsp light soy sauce</li>
        <li>1 tbsp toasted sesame oil</li>
        <li>1 pinch of ground white pepper</li>
        <li>1 tbsp cornflour, mixed with 1 tbsp water</li>
        <li>To serve</li>
        <li>2 large spring onions, washed, trimmed and sliced, to serve</li>
            
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            Put all the ingredients for the meatballs into a large bowl and stir to combine well. Using wetted hands, take a golf ball-sized mound and roll into a round shape. Put on a plate and repeat to make 12.</li>
        <li>STEP 2<br>
            Pour the groundnut oil into a large wok or pan and set over high heat until a thermometer reads 160C. Put a meatball onto a slotted spoon and gently lower into the oil. Leave to brown for 5-7 mins until golden, then cook all the meatballs. To check if a meatball is cooked, push a skewer through and, if it comes out clean, it’s cooked. Lift the meatballs out, then drain on a plate lined with kitchen paper and set aside.</li>
        <li>STEP 3<br>
            Add 1 tbsp of the hot oil to a clean wok. Put over a high heat, add the vegetable stock, 850ml water, the mushrooms and Chinese leaf, and cook over a medium heat for 10-12 mins. Add the meatballs and cook for a further 4-5 mins, adjusting the cabbage leaves so they wrap around each meatball – the meatball resembles the ‘lion's head’ and the cabbage resembles the ‘mane’. Season with sesame oil, salt and ground white pepper. To thicken the soup, add 1 tbsp of the cornflour mixture when the broth is boiling. Then turn the heat to low and garnish with the sliced spring onions</li> 
        <li>STEP 4<br>
            Ladle a portion into soup bowls, spoon a meatball and with some Chinese leaf and sliced mushrooms, and serve immediately.</li>
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


