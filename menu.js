document.getElementById("MenuInfo").addEventListener('click', openCloseCatagorie)
function openCloseCatagorie(event){
    if(event.target.classList.contains("menuHeading")){
        if(event.target.nextElementSibling.style.dysplay == "grid"){
            event.target.nextElementSibling.style.dysplay == "none"
        }else{
            event.target.nextElementSibling.style.dysplay == "grid"
        }
    }
}