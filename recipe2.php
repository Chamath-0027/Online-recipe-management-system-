<!DOCTYPE html>
<html>
<head>
    <title> Pork carnitas</title>
    <link rel="stylesheet" href="recipe2.css">
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




    <h1>Pork carnitas</h1>

    <img src="ps.jpeg" alt="Pork carnitas">

    <h2>Ingredients</h2>
    <ul>
        <li> 1½ tbsp vegetable oil </li>
        <li> 2 red onions, roughly chopped</li>
        <li>  1 whole garlic bulb, cut in half</li>
        <li>  2 tsp dried oregano</li>
        <li> 2 tsp ground cumin </li>
        <li> 1 tsp chilli powder </li>
        <li> 2 bay leaves</li>
        <li> 4 limes, juiced (reserve the squeezed halves of 3 limes)</li>
        <li> 2 oranges, juiced (reserve the squeezed halves)</li>
    </ul>

    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>step 1- Heat 1 tbsp of the vegetable oil in large saucepan over a medium heat and cook the red onions for 10-12 mins, stirring occasionally until softened and caramelised. Add the halved garlic bulbs, cut-side down, along with the oregano, cumin, chilli powder and bay leaves. Tip in three-quarters of the lime juice, the orange juice and the reserved citrus halves. Stir in the sugar, turn up the heat and continue to cook until the base has caramelised, about 3-5 mins. Pour in the stock and nestle in the pork. Top up with water so the pork is submerged, then cover and simmer over a low heat for 3-4 hrs until the meat is completely tender and falling apart.

        </li>
        <li>step 2- Remove the pork to a board and set aside. Turn the heat up to high and reduce the cooking liquor by a third. (This helps intensify the flavour.) Once the liquid has reduced, remove the lime and orange halves with a slotted spoon and discard.</li>
            <li>step 3- Shred the pork using two forks and transfer to an ovenproof dish. Heat the grill to high. Drizzle the remaining ½ tbsp vegetable oil over the pork and grill for 5-10 mins, or until the pork is crispy and charred. Add ladlefuls of the reduced cooking liquor to the pork and toss until it’s well-coated. Combine the chopped onion and remaining lime juice in a bowl with a pinch of salt. Serve the shredded pork in corn tortillas, topped with the onion mixture, salsa and chopped coriander, with the remaining sauce on the side for dipping, if you like. Once cool, the remaining sauce can be frozen for up to three months to use as a base for soups or stews. </li>
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
