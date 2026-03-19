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
<section class="menuSection">
    <button class="menuButton" onclick="toonMenu('eten')">Eten</button>
    <button class="menuButton" onclick="toonMenu('dessert')">Dessert</button>
    <button class="menuButton" onclick="toonMenu('drinken')">Drinken</button>
    <button class="menuButton" onclick="toonMenu('wijnen')">Wijnen</button>
</section>

<section id="eten">
    <h3>voorgerecht</h3>
    <p>Romige Pompoensoep</p>
    <p>Gefrituurde ArIsjok</p>
    <p>BruscheDa Tricolore</p>

    <h3>hoofdgerechten</h3>
    <p>Portobello Wellington</p>
    <p>Jackfruit Rendang</p>
    <p>Gnocchi al Tartufo</p>
    <p>Beyond Burger Deluxe</p>

    <h3>bijgerechten</h3>
    <p>Zoete Aardappelfriet</p>
    <p>Gemengde Salade</p>
    <p>Geroosterde Seizoensgroenten</p>
</section>
<section id="dessert" style="display:none">
    <h3>dessert</h3>
    <p>Chocolade Lava Cake</p>
    <p>Cheesecake van de Dag</p>
    <p>Crème Brûlée</p>
</section>
<section id="drinken" style="display:none">
    <h3>warme dranken</h3>
    <p>Espresso</p>
    <p>Cappuccino</p>
    <p>Thee</p>
    <p>Verse muntthee</p>

    <h3>koude dranken</h3>
    <p>Huisgemaakte ijsthee</p>
    <p>Vers geperst sinaasappelsap</p>
    <p>Kombucha van de dag</p>
    <p>Biologische frisdranken</p>
</section>
<section id="wijnen" style="display:none">
    <h3>witte wijn</h3>
    <p>Biologische Chardonnay</p>
    <p>Biologische Sauvignon Blanc</p>

    <h3>roode wijn</h3>
    <p>Biologische Merlot</p>
    <p>Biologische Tempranillo</p>
</section>

</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>
