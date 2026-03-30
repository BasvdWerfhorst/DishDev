<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a site called Vegan Food Amsterdam, dedicated to exploring vegan food in Amsterdam, sharing information, tips, and guides about plant-based dining and the local vegan scene.">
    <meta name="keywords" content="vegan, vegatarish, vega amsterdam, vegan food amsterdam, vegan restaurant amsterdam, plant based restaurant amsterdam, vegan dining amsterdam, vegan food in amsterdam, vegan cuisine amsterdam, vegan menu amsterdam, vegan cafe amsterdam, plant based food amsterdam, vegan lunch amsterdam, vegan dinner amsterdam, healthy vegan food amsterdam, vegan takeaway amsterdam, vegan restaurant netherlands">
    <meta name="author" content="Wessel & Bas">
    <title>Vegan Food Amsterdam</title>
    <link rel="icon" type="image/x-icon" href="">    
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="Darkmode js\hamburger.css">
    <script src="script/personenKnop" defer></script>
    <script src="Darkmode js\darkmode.js" defer></script>
    <script src="Darkmode js\Hamburger Menu.js" defer></script>
</head>
<body>
    
<header>
<?php require_once 'inc/header.php' ?>
</header>

<main>
<h1 id="resH1">reserveren</h1>
<section id="formBorder">
<section id="formBox">
    <form action="" method="get" id="form">
    <label class="label" for="name">Uw naam:</label>
    <input type="text" name="name" required id="name">
    <label class="label" for="email">Uw e-mail:</label>
    <input type="email" name="email" required id="email">
    <label class="label" for="telefoonnummer">Uw telefoonnummer:</label>
    <input type="tel" name="telefoonnummer" required id="telNummer">
    <!-- aantal personen van nummer box naar mooie radio knoppen maken -->
    <label class="label" for="aantalPersonen">Aantal personen:</label>
    <section id="persoonAantal" required>
    <section id="flexForm">
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="1">
            <span class="span">1</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="2">
            <span class="span">2</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="3">
            <span class="span">3</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="4">
            <span class="span">4</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="5">
            <span class="span">5</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="6">
            <span class="span">6</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="7">
            <span class="span">7</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="8">
            <span class="span">8</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="9">
            <span class="span">9</span>
        </label>
        <label name="aantalPersonen" class="personenLabel">
            <input type="radio" name="aantalPersonen" class="radioPersonen" value="10">
            <span class="span">10</span>
        </label>
    </section>
    </section>
    <!-- <label class="label" for="aantalPersonen">aantal personen:</label>
    <input type="number" name="aantalPersonen" required min="1" max="10" id="personen"> -->
    <section class="DateTijd">
        <label class="label" for="date">Datum an</label>
        <label class="label" for="tijd">d tijd:</label>
    </section>
    <section class="DateTijd" id="dateInput">
        <input type="date" name="date" required id="date">
        <input type="time" name="tijd" required id="time">
    </section>  
    <label class="label" for="opmerkingen">extra informatie/opmerkingen:</label>
    <textarea 
        id="opmerkingen" 
        name="opmerkingen" 
        placeholder="Typ hier...">
    </textarea>
    <input type="submit" value="reserveren" id="submitForm">
    </form>
</section>
</section>
</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>