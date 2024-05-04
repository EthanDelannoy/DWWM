// --------------------------------------------------------MENU BURGER---------------------------------------------------------
const burgerContainer = document.getElementById('burgerContainer');
const menu = document.getElementById('menu');

burgerContainer.addEventListener('click', function() {
    burgerMenu.classList.toggle('change');
    menu.classList.toggle('show');
});

// -----------------------------------------------------BOUTON PROJET/CV--------------------------------------------------------

const btnprojet = document.getElementById('btnAccueil1');
const btnCv = document.getElementById('btnAccueil2')

btnprojet.addEventListener('mouseenter', () =>{
    btnprojet.style.backgroundColor = '#87D8F5';
    btnprojet.style.color = 'black';
    btnCv.style.backgroundColor ='transparent';
    btnCv.style.color = 'white';
})

btnprojet.addEventListener( "mouseleave", () =>{
    btnprojet.style.backgroundColor = 'transparent';
    btnprojet.style.color = 'white';
    btnCv.style.backgroundColor = '#87D8F5';
    btnCv.style.color = "black";
})

// ---------------------------------------------------------ANIMATION BARRE NAV-------------------------------------------------------

const barre = document.getElementById('barre');


function positionBarre(element) {
    const rect = element.getBoundingClientRect();
    const barreWidth = rect.width;
    const barreLeft = rect.left + (rect.width / 2); 
    barre.style.width = `${barreWidth}px`;
    barre.style.left = `${barreLeft}px`; 
}


document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('mouseenter', () => {
        positionBarre(link);
        barre.classList.add('active'); 
    });
});

document.querySelector('nav').addEventListener('mouseleave', () => {
    barre.style.width = '0';
    barre.classList.remove('active'); 
});
