<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDev</title>
    <link rel="stylesheet" href="style/style.css">
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
    <label class="label" for="aantalPersonen">aantal personen:</label>
    <!-- aantal personen van nummer box naar mooie radio knoppen maken -->
    <input type="number" name="aantalPersonen" required min="1" max="10" id="personen">
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
    <!-- form mooier maken -->
</section>
</section>
</main>

<footer>
<?php require_once 'inc/footer.php' ?>
</footer>

</body>
</html>