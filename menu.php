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
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Romige Pompoensoep</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"> Fluweelzachte soep van biologische pompoen met geroosterde pompoenpiDen en versekruiden</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€7,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Gefrituurde ArIsjok</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Knapperige arIsjokblaadjes geserveerd met huisgemaakte aioli van aquafaba</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€8,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">BruscheDa Tricolore</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Geroosterd zuurdesembrood met drie toppings: avocado-spread, gegrilde paprika tapenade, en tomaten-basilicum salsa</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€8,00</h5></article>
            </section>
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
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Portobello Wellington</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">In bladerdeeg gebakken portobello met duxelles van paddenstoelen, geserveerd met seizoensgroenten en rode wijnsaus</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€19,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Jackfruit Rendang</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Indonesische curry van jonge jackfruit met kokosrijst en gewokte groenten</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€18,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Gnocchi al Tartufo</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Huisgemaakte aardappelgnocchi met truffelsaus, gebakken paddenstoelen en rucola</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€17,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Beyond Burger Deluxe</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Plant-based burger op een briochebroodje met gerookte-paprikamayonaise, gegrilde groenten en zoete aardappelfriet</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€16,50</h5></article>
            </section>
        </article>
    </article>

    <br>

    <h3 class="menuHeader"> bijgerechten</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Zoete Aardappelfriet</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Met truffelmayonaise</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Gemengde Salade</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Met seizoensgroenten en balsamico dressing</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,00</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Geroosterde Seizoensgroenten</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Met verse kruiden en citroenolie</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
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
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Chocolade Lava Cake</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Warme chocoladecake met een vloeibare kern, geserveerd met vanille-ijs van kokosmelk</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€8,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Cheesecake van de Dag</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Vraag onze bediening naar de smaak van vandaag</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€7,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Crème Brûlée</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription">Op basis van vanille custard van cashewnoten met een krokant laagje gekarameliseerde suiker</p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€8,00</h5></article>
            </section>
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
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Espresso</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€2,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Cappuccino (met havermelk)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€3,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Thee (diverse soorten)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€2,75</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Verse muntthee</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€3,00</h5></article>
            </section>
        </article>
    </article>

    <br>

    <h3 class="menuHeader"> koude dranken</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Huisgemaakte ijsthee</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€3,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Vers geperst sinaasappelsap</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,00</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Kombucha van de dag</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Biologische frisdranken</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€3,00</h5></article>
            </section>
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
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Biologische Chardonnay (glas)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Biologische Sauvignon Blanc (glas)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
        </article>
        
    </article>

    <br>

    <h3 class="menuHeader"> roode wijn</h3>
    <article class="menuRow">
        <picture class="menuImg">
            <img src="img/x.png" alt="x">
        </picture>
        <article class="menuItems">
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Biologische Merlot (glas)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
            <section class="Items">
                <article class="itemNameArt"><h4 class="itemName">Biologische Tempranillo (glas)</h4></article>
                <article class="itemDescriptionArt"><p class="itemDescription"></p></article>
                <article class="itemPriceArt"><h5 class="itemPrice">€4,50</h5></article>
            </section>
        </article>
    </article>
</section>


</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>
