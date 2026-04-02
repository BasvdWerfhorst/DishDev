const ins = document.getElementById('instelingen');
const inM = document.getElementById('instelMogelijkheden');

ins.addEventListener('click', () => {
    inM.classList.toggle('open'); 
});

document.addEventListener('click', (event) => {
    if (!ins.contains(event.target) && !inM.contains(event.target)) {
        inM.classList.remove('open');
    }
});