<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDev</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="script/menu.js" defer></script>
</head>

<body>
    
<header>
<?php require_once 'inc/header.php' ?>
</header>

<main>
<section id="menuSection">
    <button class="menuButton" id="btnEten" onclick="toonMenu('eten')">Eten</button>
    <button class="menuButton" id="btnDessert" onclick="toonMenu('dessert')">Dessert</button>
    <button class="menuButton" id="btnDrinken" onclick="toonMenu('drinken')">Drinken</button>
    <button class="menuButton" id="btnWijnen" onclick="toonMenu('wijnen')">Wijnen</button>
</section>
<!-- text groote van de buttons veranderen voor elk device-width -->
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
    <!-- h3 plaats op kleinere device-width verplaatsen -->
    <!-- fotos vernaderen naar eten -->
    <!-- inhoud van de p veranderen op de product naam, product info en de prijs aan te geven-->
    <!-- glutten vrij en vega tekens bij elke b enodigde product plaatsen -->
    <!-- alles nog ietsjes mooier maken -->
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


<section id="drinken" style="display:none">
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
<section id="wijnen" style="display:none">
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
