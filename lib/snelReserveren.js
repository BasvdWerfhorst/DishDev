
function snelClose(){
    document.getElementById("snelReserveren").style.display = "none";
    document.getElementById("snelButtonOpen").style.display =   "block";
}

function snelOpen(){
    document.getElementById("snelReserveren").style.display = "block";
    document.getElementById("snelButtonOpen").style.display = "none";
}
function navReserveren(){
    window.location.href="reserveren.php";
}