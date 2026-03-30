<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a site called Vegan Food Amsterdam, dedicated to exploring vegan food in Amsterdam, sharing information, tips, and guides about plant-based dining and the local vegan scene.">
    <meta name="keywords" content="vegan, vegatarish, vega amsterdam, vegan food amsterdam, vegan restaurant amsterdam, plant based restaurant amsterdam, vegan dining amsterdam, vegan food in amsterdam, vegan cuisine amsterdam, vegan menu amsterdam, vegan cafe amsterdam, plant based food amsterdam, vegan lunch amsterdam, vegan dinner amsterdam, healthy vegan food amsterdam, vegan takeaway amsterdam, vegan restaurant netherlands">
    <meta name="author" content="Wessel & Bas">

    <title>Vegan Food Amsterdam</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="Darkmode js\hamburger.css">
    <script src="indexpage.js" defer></script>
    <script src="Darkmode js\darkmode.js" defer></script>
    <script src="Darkmode js\Hamburger Menu.js" defer></script>
    <script src="lib/snelReserveren.js" defer></script>
</head>
<body>
    
<header class="Header-BGC">
<?php require_once 'inc/header.php' ?>
</header>
    <main>
<section id="snelReserveren">
    <section id="snelBox">
        <picture id="snelLogo"><img src="img/logo_vegan_food_plaatje.png" alt="Vegan food logo"> </picture>
        <section id="snelX"><button id="snelButtonClose" onclick="snelClose()">X</button></section>
        <article class="snelText"><p>Wil je reserveren voor meer dan 10 personen? Neem dan telefonisch contact op via</p></article>
        <article class="snelText"><h3>personen 1-10</h3></article>
        <article class="snelText"><h3>vandaag nog plek!</h3></article>
        <article class="snelText"><p>klik op knop om te reserveren</p></article>
        <button id="snelButton" onclick="navReserveren()">Reserveer nu</button>
    </section>
</section>
<button id="snelButtonOpen" onclick="snelOpen()">snel reserveren</button>
<div class="slideshow">
  <img class="slide" src="img\Vibrant plant-based dining in Amsterdam.png" alt="slideshow Vegan Food" title=" slideshow Vegan Food">
  <img class="slide" src="img\img3 slideshow.jpg" alt="slideshow Vega   n Food" title=" slideshow Vegan Food">
  <img class="slide" src="img\Img slideshow.jpg" alt="slideshow Vegan Food" title=" slideshow Vegan Food">
</div>
    <article class="mainpage-colorchange">
        <h1 id="about-us">About us:</h1> <br>
            <article id="aboutarticle">
            
                <p id="About-text">The restaurant began as a small pop-up in a borrowed kitchen, where plant-based meals were cooked for friends and curious passersby. A belief that vegan food should be comforting helped it grow a loyal following. Years later, it became a permanent spot—simple, seasonal, and built on the idea that good food can gently change habits. Check a few of our dishes below:</p>
                <img src="img\Jamaican-Jerk-Bowl.jpg" id="about-us-img">
            </article>
        </article>
    </article>
    
    <br><br><br><br><br><br>

     <article id="article-2">
                <h1 id="recipesh1">Recipes</h1>
                <article class="recipes-img1">
                    <img src="img\Vegan-kapsalon_c.jpg" alt="Foto Vegan-kapsalon">
                        <p class="vegan-recipes-text">Our vegan kapsalon, inspired by the famous Kapsalon from Rotterdam, layers crispy fries with seasoned plant-based kebab, melted vegan cheese, fresh salad, and garlic sauce for a rich, satisfying street-food classic.</p>
                </article>
                <article class="recipes-img1">  
                        <img src="img\vegan-rendang_jackfruit.jpg" alt="Foto vegan-rendang">
                        <p class="vegan-recipes-text">Our vegan rendang features tender plant-based pieces simmered in a rich coconut curry with lemongrass, ginger, garlic, and spices, creating a deeply aromatic, comforting dish inspired by traditional Rendang.</p>
                </article> 
                <article class="recipes-img1">  
                        <img src="img\paddenstoelen-shoarma.jpg" alt="Foto paddenstoelen-shoarma">
                        <p class="vegan-recipes-text">Our mushroom shoarma sandwich features spiced sautéed mushrooms in warm pita, topped with crisp lettuce, tomato, cucumber, and creamy garlic sauce for a savory, satisfying plant-based street-food favorite.</p>
                </article> 
        <a href="reserveren.php" style="text-decoration: none;">
            <button id="mainpage-resbutton" title="Reserveer nu!">Reserveer nu:</button>
        </a>
    </article>

    </main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>