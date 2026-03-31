const ham = document.getElementById('hamburger-menu');
const nav = document.getElementById('navLinks');

function showOrHideNav(e) {
    if (nav.style.display != "flex") {
        nav.style.display = 'flex'
    } else {
        nav.style.display = 'none';
    }
}



ham.addEventListener('click', showOrHideNav);

document.getElementById('hamburger-menu').addEventListener('click', function () {
    this.classList.toggle('is-open');
});