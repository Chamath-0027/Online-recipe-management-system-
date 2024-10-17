<!DOCTYPE html>
<html>
<head>
    <title>Sichuan-style Yuxiang Aubergine </title>
    <link rel="stylesheet" href="crep2.css">
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




    <h1> Sichuan-style Yuxiang Aubergine </h1>

    <img src="ssy.jpeg" alt="Sichuan-style yuxiang aubergine">

    <h2>Ingredients</h2>
    <ul>
        
        
       
      
      
      
       
        
       
       
        
      <li>200g dehydrated minced soy</li>
      <li>2 tbsp rapeseed oil</li>
      <li>200g (3-4) baby aubergines, trimmed and sliced into quarters lengthways</li>
      <li>1 tsp toasted whole Sichuan pepper</li>
      <li>2 garlic cloves, finely chopped</li>
      <li>2.5cm piece ginger, peeled and finely grated</li>
      <li>1 red chilli, deseeded and finely chopped</li>
      <li>2 tbsp dark soy sauce</li>
      <li>1 heaped tbsp chilli bean paste</li>
      <li>2 tbsp shaoxing rice wine or dry sherry</li>
      <li>2 spring onions, trimmed and finely sliced, to garnish </li>
      
    <h2>Instructions</h2>
    <h2>METHOD</h2>
    <ul>
        <li>STEP 1<br>
            Tip the minced soy into a bowl, pour over 400ml hot boiling water from the kettle. Fluff up the grains. Set aside for 5 mins.</li>
        <li>STEP 2<br>
            Stir all the ingredients for the sauce in a jug. Set aside until needed.</li>
        <li>STEP 3<br>
            Heat a wok over a high heat until smoking, then add 1 tbsp rapeseed oil. Add the aubergines and cook, stirring, for 5 mins, until browned. As you cook it, keep adding drops of water, up to about 50ml in total. This will create steam to help soften the aubergine (rather than frying it in lots of oil). Repeat this process about three times until the aubergines have softened.</li>
        <li>STEP 4<br>
            Push the aubergine to the far side of the wok (away from you). Add the remaining 1 tbsp rapeseed oil. Add the Sichuan pepper, garlic, ginger and chilli, and stir for a few seconds, then toss into the aubergines. Push this all to one side of the wok, then add the rehydrated minced soy and stir for 30 seconds. Season with the dark soy sauce, chilli bean paste and shaoxing rice wine or dry sherry. Pour over the sauce from the jug and bring to the bubble, cooking for 1-2 mins on high heat until the sauce thickens. Give it a final mix. Turn off the heat. Sprinkle over the spring onions and serve immediately with jasmine rice.</li>
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
