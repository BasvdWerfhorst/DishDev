let slides = document.getElementsByClassName('slide');
let slideshowcontainer = document.getElementById('slideshow');

let slideNum = 0;
let lastSlide = 0;
let timer = 3000;

//Show/hide bruikbaar voor meerdere onderdelen binnen de slideshow acties
function showHide() {

    slides[lastSlide].style.display = "none";
    slides[slideNum].style.display = 'block';

}

//Basis tonen en verbergen van de afbeeldingen
function slideshow() {
    lastSlide = slideNum;
    if (slideNum < slides.length - 1) {
        slideNum++;
    } else {
        slideNum = 0;
    }

    showHide();
}

//setInterval opslaan in een variabel om later de setInterval te manipuleren.
let slideinter = setInterval(slideshow, timer);

//Eerste keer normaal uitvoeren zodat een afbeelding al meteen zichhtbaar is.
slideshow();