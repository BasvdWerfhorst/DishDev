<!DOCTYPE html>
<html lang="nl" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Bekijk ons uitgebreide menu van plantaardige gerechten bij Vegan Food Amsterdam. Van voorgerechten en hoofdgerechten tot desserts en dranken – ontdek onze heerlijke vegan recepten.">
    <meta name="keywords" content="vegan menu amsterdam, plantaardig menu, vegan gerechten amsterdam, vegan restaurant menu, vegetarisch eten amsterdam, vegan eten amsterdam, plantaardige recepten, vegan cafe menu, vegan dining amsterdam, vegan food menu, vegan restaurant netherlands, vegan lunch amsterdam, vegan dinner amsterdam, plant-based menu amsterdam, healthy vegan food, vegan recepten amsterdam">
    <meta name="author" content="Bas">

    <title>Menu - Vegan Food Amsterdam</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="Darkmode js\hamburger.css">
    <script src="lib/menu.js" defer></script>
    <script src="Darkmode js/darkmode.js" defer></script>
    <script src="Darkmode js/Hamburger Menu.js" defer></script>
    <script src="lib/instelingen.js" defer></script>

    <link rel="icon" type="image/x-icon" href="img\Icon2.png">
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
<section id="eten">
    <article class="menuHeaderRow">
        <h1 class="menuHeader"> voorgerecht</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_pompoensoep_romig.png" alt="Kom warme vegan pompoensoep met pompoenpitten en kruiden">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Romige Pompoensoep</h4>
                <p class="itemDescription">Fluweelzachte soep van biologische pompoen met geroosterde pompoenpitten en verse kruiden</p>
                <h5 class="itemPrice">€7,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Gefrituurde artisjok</h4>
                <p class="itemDescription">Knapperige artisjokblaadjes geserveerd met huisgemaakte aioli van aquafaba</p>
                <h5 class="itemPrice">€8,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">BruscheDa Tricolore</h4>
                <p class="itemDescription">Geroosterd zuurdesembrood met drie toppings: avocado-spread, gegrilde paprika tapenade, en tomaten-basilicum salsa</p>
                <h5 class="itemPrice">€8,00</h5>
            </section>
        </section>
    </section>

    <br>

    <article class="menuHeaderRow">
        <h1 class="menuHeader"> hoofdgerechten</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_burger_deluxe_friet.png" alt="Vegan burger op briochebroodje met mayo, gegrilde groenten en zoete aardappelfriet">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Portobello Wellington</h4>
                <p class="itemDescription">In bladerdeeg gebakken portobello met duxelles van paddenstoelen, geserveerd met seizoensgroenten en rode wijnsaus</p>
                <h5 class="itemPrice">€19,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Jackfruit Rendang</h4>
                <p class="itemDescription">Indonesische curry van jonge jackfruit met kokosrijst en gewokte groenten</p>
                <h5 class="itemPrice">€18,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Gnocchi al Tartufo</h4>
                <p class="itemDescription">Huisgemaakte aardappelgnocchi met truffelsaus, gebakken paddenstoelen en rucola</p>
                <h5 class="itemPrice">€17,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Beyond Burger Deluxe</h4>
                <p class="itemDescription">Plant-based burger op een briochebroodje met gerookte-paprikamayonaise, gegrilde groenten en zoete aardappelfriet</p>
                <h5 class="itemPrice">€16,50</h5>
            </section>
        </section>
    </section>

    <br>

    <article class="menuHeaderRow">
        <h1 class="menuHeader"> bijgerechten</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_gemengde_salade_balsamico.png" alt="Vegan seizoenssalade met kleurrijke groenten en balsamicodressing">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Zoete Aardappelfriet</h4>
                <p class="itemDescription">Met truffelmayonaise</p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Gemengde Salade</h4>
                <p class="itemDescription">Met seizoensgroenten en balsamico dressing</p>
                <h5 class="itemPrice">€4,00</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Geroosterde Seizoensgroenten</h4>
                <p class="itemDescription">Met verse kruiden en citroenolie</p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
        </section>
    </section>
</section>
<section id="dessert">
    <article class="menuHeaderRow">
        <h1 class="menuHeader"> dessert </h1>
    </article>
        <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_lava_cake_kokosijs.png" alt="Warme vegan chocoladecake met vloeiende kern en kokosijs">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Chocolade Lava Cake</h4>
                <p class="itemDescription">Warme chocoladecake met een vloeibare kern, geserveerd met vanille-ijs van kokosmelk</p>
                <h5 class="itemPrice">€8,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Cheesecake van de Dag</h4>
                <p class="itemDescription">Vraag onze bediening naar de smaak van vandaag</p>
                <h5 class="itemPrice">€7,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Crème Brûlée</h4>
                <p class="itemDescription">Op basis van vanille custard van cashewnoten met een krokant laagje gekarameliseerde suiker</p>
                <h5 class="itemPrice">€8,00</h5>
            </section>
        </section>
    </section>
</section>


<section id="drinken" style="display:none">
    <article class="menuHeaderRow">
        <h1 class="menuHeader"> warme dranken</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_cappuccino_havermelk.png" alt="Vegan cappuccino met havermelk en latte art">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Espresso</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€2,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Cappuccino (met havermelk)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€3,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Thee (diverse soorten)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€2,75</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Verse muntthee</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€3,00</h5>
            </section>
        </section>
    </section>

    <br>

    <article class="menuHeaderRow">
        <h1 class="menuHeader"> koude dranken</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_biologische_frisdrank.png" alt="Gekoelde vegan biologische frisdrank in een glas">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Huisgemaakte ijsthee</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€3,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Vers geperst sinaasappelsap</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,00</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Kombucha van de dag</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Biologische frisdranken</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€3,00</h5>
            </section>
        </section>
    </section>
</section>
<section id="wijnen" style="display:none">
    <article class="menuHeaderRow">
        <h1 class="menuHeader"> witte wijn</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_biologische_wijn_wit_chardonnay.png" alt="Glas vegan biologische wijn op tafel">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Biologische Chardonnay (glas)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Biologische Sauvignon Blanc (glas)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
        </section>
        
    </section>

    <br>

    <article class="menuHeaderRow">
        <h1 class="menuHeader"> roode wijn</h1>
    </article>
    <section class="menuRow">
        <picture class="menuImg">
            <img src="img/vegan_biologische_wijn_rood_marlot.png" alt="Glas vegan biologische wijn op tafel">
        </picture>
        <section class="menuItems">
            <section class="Items">
                <h4 class="itemName">Biologische Merlot (glas)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
            <section class="Items">
                <h4 class="itemName">Biologische Tempranillo (glas)</h4>
                <p class="itemDescription"></p>
                <h5 class="itemPrice">€4,50</h5>
            </section>
        </section>
    </section>
</section>


</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>

