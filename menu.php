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
    <script src="script/menu.js" defer></script>
    <script src="Darkmode js\darkmode.js" defer></script>
    <script src="Darkmode js\Hamburger Menu.js" defer></script>
</head>

<body>
    
<header class="Header-BGC">
<?php require_once 'inc/header.php' ?>
</header>

<main>
<section id="menuSection">
    <button class="menuButton" id="btnEten" onclick="toonMenu('eten')">Eten</button>
    <button class="menuButton" id="btnDessert" onclick="toonMenu('dessert')">Dessert</button>
    <button class="menuButton" id="btnDrinken" onclick="toonMenu('drinken')">Drinken</button>
    <button class="menuButton" id="btnWijnen" onclick="toonMenu('wijnen')">Wijnen</button>
</section>

<section id="eten">
    <h3 class="menuHeader"> voorgerecht</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Romige Pompoensoep</p>
            <p>Gefrituurde ArIsjok</p>
            <p>BruscheDa Tricolore</p> 
        </article>
    </article>

    <br>

    <h3 class="menuHeader"> hoofdgerechten</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Portobello Wellington</p>
            <p>Jackfruit Rendang</p>
            <p>Gnocchi al Tartufo</p>
            <p>Beyond Burger Deluxe</p>
        </article>
    </article>

    <br>

    <h3 class="menuHeader"> bijgerechten</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Zoete Aardappelfriet</p>
            <p>Gemengde Salade</p>
            <p>Geroosterde Seizoensgroenten</p>
        </article>
    </article>
</section>
<section id="dessert">
    <h3 class="menuHeader"> dessert </h3>
        <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Chocolade Lava Cake</p>
            <p>Cheesecake van de Dag</p>
            <p>Crème Brûlée</p>
        </article>
    </article>
</section>


<section id="drinken">
    <h3 class="menuHeader"> warme dranken</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Espresso</p>
            <p>Cappuccino</p>
            <p>Thee</p>
            <p>Verse muntthee</p>
        </article>
    </article>

    <br>

    <h3 class="menuHeader"> koude dranken</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Huisgemaakte ijsthee</p>
            <p>Vers geperst sinaasappelsap</p>
            <p>Kombucha van de dag</p>
            <p>Biologische frisdranken</p>
        </article>
    </article>
</section>
<section id="wijnen">
    <h3 class="menuHeader"> witte wijn</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Biologische Chardonnay</p>
            <p>Biologische Sauvignon Blanc</p>
        </article>
        
    </article>

    <br>

    <h3 class="menuHeader"> roode wijn</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <p>Biologische Merlot</p>
            <p>Biologische Tempranillo</p>
        </article>
    </article>
</section>


</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>
