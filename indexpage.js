let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide(i) {
  for(let slide of slides){
    slide.classList.remove("active")
  }
  slides[i].classList.add("active");
}

function nextSlide() {
  index++;
  if (index >= slides.length) index = 0;
  showSlide(index);
}

function prevSlide() {
  index--;
  if (index < 0) index = slides.length - 1;
  showSlide(index);
}


setInterval(() => {
  nextSlide();
}, 5000);


showSlide(index);

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