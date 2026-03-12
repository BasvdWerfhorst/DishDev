const knop = document.querySelector('.hamburgerMenu');
const nav = document.querySelector('.navLinks');
const main = document.querySelector('main');

knop.addEventListener('click', function() {
    knop.classList.toggle('active');
    nav.classList.toggle('active');
    main.classList.toggle('hidden');
});