/* lightdark mode */

let lightanddark = document.getElementById("lightdark");

function changeMode() {
  if(document.documentElement.dataset.theme == 'light') {
  document.documentElement.dataset.theme = 'dark';
  } else {
    document.documentElement.dataset.theme = 'light';
  }
}

lightanddark.addEventListener('click', changeMode)