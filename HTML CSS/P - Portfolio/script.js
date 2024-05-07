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

// --------------------------------------------------------------DETAILS PHOTO PROJET-----------------------------------------
const imgProjet1 = document.getElementById('imgprojet1');
const textphoto1 =document.getElementById('textphoto1')

imgProjet1.addEventListener('mouseenter', () => {
    imgProjet1.style.opacity = 0.2;
    textphoto1.style.display = 'block'; 
});

imgProjet1.addEventListener('mouseleave', () => {
    imgProjet1.style.opacity = 1;
    textphoto1.style.display = 'none'
});

const imgProjet2 = document.getElementById('imgprojet2');
const textphoto2 =document.getElementById('textphoto2')

imgProjet2.addEventListener('mouseenter', () => {
    imgProjet2.style.opacity = 0.2;
    textphoto2.style.display = 'block'; 
});

imgProjet2.addEventListener('mouseleave', () => {
    imgProjet2.style.opacity = 1;
    textphoto2.style.display = 'none'
});

// --------------------------------------------------------MODAL IMAGE PROJET 1--------------------------------------------------------
document.querySelector('#imgprojet1').addEventListener('click', function() {
    
    var modal = document.createElement('div');
    modal.classList.add('modal');

    
    modal.innerHTML = `
        <h1>Mon portfolio</h1>
        <span>Vous y étes actuellement !</span>
        <p>J'ai codé mon portfolio entierement en HTML-CSS et JavaScript.<br>Entièrement Responsive, mon portfolio est fait en flexbox. <br> Comme vous pouvez le constatez, vous pouvez y retrouver toutes les informations nécessaire à mon sujet et tout ce que j'ai pus réaliser !</p>
        <button class="closeBtn">Fermer</button>
    `;

    
    document.body.appendChild(modal);

    
    modal.querySelector('.closeBtn').addEventListener('click', function() {
        document.body.removeChild(modal); 
    });
});

// ----------------------------------------------------------MODAL IMAGE PROJET 2----------------------------------------------------

document.querySelector('#imgprojet2').addEventListener('click', function() {
    
    var modal = document.createElement('div');
    modal.classList.add('modal2');

    
    modal.innerHTML = `
        <h1>JULITH</h1>
        <span>Un jeux tour par tour</span>
        <p>J'ai crée un jeux tour par tour entiérment en JavaScript dans l'univers de DOFUS.<br> Les joueurs ont le choix entre plusieurs classes, ils peuvent mettre leur pseudo et que le combat commence !<br>En combat chaque classe à des caractéristique différente, ils peuvent ce soigner et attaquer mais à tour de role !<br> Une fois qu'un personnage tombe à 0 points de vie, le combat s'arrête et le gagnant est designé victorieux. </p>
        <button class="closeBtn">Fermer</button>
    `;

    
    document.body.appendChild(modal);

    
    modal.querySelector('.closeBtn').addEventListener('click', function() {
        document.body.removeChild(modal); 
    });
});