function toonMenu(versie) {
    document.getElementById('eten').style.display = 'none'
    document.getElementById('dessert').style.display = 'none'
    document.getElementById('drinken').style.display = 'none'
    document.getElementById('wijnen').style.display = 'none'
    document.getElementById(versie).style.display = 'block'

    if (window.innerWidth < 768 && versie === 'eten') {
        document.getElementById('dessert').style.display = 'block'
    }
    if (window.innerWidth < 768 && versie === 'drinken') {
        document.getElementById('wijnen').style.display = 'block'
    }
}
