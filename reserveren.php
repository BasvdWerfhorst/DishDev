<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="This is a site called Vegan Food Amsterdam, dedicated to exploring vegan food in Amsterdam, sharing information, tips, and guides about plant-based dining and the local vegan scene.">
    <meta name="keywords" content="vegan, vegatarish, vega amsterdam, vegan food amsterdam, vegan restaurant amsterdam, plant based restaurant amsterdam, vegan dining amsterdam, vegan food in amsterdam, vegan cuisine amsterdam, vegan menu amsterdam, vegan cafe amsterdam, plant based food amsterdam, vegan lunch amsterdam, vegan dinner amsterdam, healthy vegan food amsterdam, vegan takeaway amsterdam, vegan restaurant netherlands">
    <meta name="author" content="Wessel & Bas">

    <title>Vegan Food Amsterdam</title>
    
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
<header class="Header-BGC">
<?php require_once 'inc/header.php' ?>
</header>

<main>
<h1 id="resH1">reserveren</h1>
<section id="formBorder">
<section id="formBox">
    <form action="" method="get" id="form">
    <label for="name">Uw naam:</label>
    <input type="text" name="name" required id="name">
    <label for="email">Uw e-mail:</label>
    <input type="email" name="email" required id="email">
    <label for="telefoonnummer">Uw telefoonnummer:</label>
    <input type="tel" name="telefoonnummer" required id="telNummer">
    <label for="aantalPersonen">aantal personen:</label>
    <input type="number" name="aantalPersonen" required min="1" max="10" id="personen">
    <section class="DateTijd">
        <label for="date">Datum an</label>
        <label for="tijd">d tijd:</label>
    </section>
    <section class="DateTijd" id="dateInput">
        <input type="date" name="date" required id="date">
        <input type="time" name="tijd" required id="time">
    </section>  
    <label for="opmerkingen">extra informatie/opmerkingen:</label>
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