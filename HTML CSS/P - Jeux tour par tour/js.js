// -----------------------------------------------------MODAL TUTORIEL---------------------------------------------------------------
const ouvrirmodal = document.getElementById("tutoriel");


ouvrirmodal.addEventListener('click', () => {
    let modal = document.getElementById("ouvertureModal");
    modal.style.display ='block'
})

modalEnd.addEventListener('click', () => {
    const modalEnd = document.getElementById("modalEnd");
    let modal = document.getElementById("ouvertureModal");
    modal.style.display = 'none'
})

// --------------------------------------------CHANGEMENT DE PAGE ACCUEIL VERS SELECTION PERSO---------------------------------------

const jouer = document.getElementById("jouer")


jouer.addEventListener('click', () => {
    const accueil = document.getElementById('accueil')
    accueil.style.display = 'none';

    const combat = document.getElementById('combat')
    combat.style.display = 'none'

    const personnage = document.getElementById('personnage')
    personnage.style.display = 'block'
})

// ------------------------------------------------------CARROUSEL AVEC PERSO J1-------------------------------------------------------
let slideIndex = 0;

let persochoisij1;

function moveSlide1(n) {
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  slideIndex = (slideIndex + n + totalSlides) % totalSlides;
  const offset = -slideIndex * 100;
  document.querySelector('.carousel-container').style.transform = `translateX(${offset}%)`;

  persochoisij1 = slideIndex

switch (persochoisij1) {
  case 0:
    tab[0]
    console.log(tab[0]);
    break;
  case 1:
    tab[1]
    console.log(tab[1]);
    break;
  case 2:
    tab[2]
    console.log(tab[2]);
    break;
  case 3:
    tab[3]
    console.log(tab[3]);
    break;
}

let iop = tab[0]
let eniripsa = tab[1]
let huppermage = tab[2]
let cra = tab[3]

let imgjoueur1 = document.getElementById('imgjoueur1');

if (persochoisij1 === tab[0]) {
  imgjoueur1.style.backgroundImage = "url('./image/iop 1.svg')";
} else if (persochoisij1 === tab[1]) {
  imgjoueur1.style.backgroundImage = "url('./image/eni (2).png')";
} else if (persochoisij1 === tab[2]) {
  imgjoueur1.style.backgroundImage = "url('./image/huppeer 1.svg')";
} else if (persochoisij1 === tab[3]) {
  imgjoueur1.style.backgroundImage = "url('./image/cra 1.svg')";
}

}

// --------------------------------------------------------CARROUSEL AVEC PERSO J2------------------------------------------------------

let slidesIndex = 0;
let persochoisij2;

function moveSlide2(n) {
  const slides = document.querySelectorAll('.slide2');
  const totalSlides = slides.length;
  slidesIndex = (slidesIndex + n + totalSlides) % totalSlides;
  const offset = -slidesIndex * 100;
  document.querySelector('.carousel-container2').style.transform = `translateX(${offset}%)`;
  persochoisij2 = slideIndex

  persochoisij2 = slidesIndex

  switch (persochoisij2) {
    case 0:
      clonedTab2[0]
      console.log(clonedTab2[0]);
      break;
    case 1:
      clonedTab2[1]
      console.log(clonedTab2[1]);
      break;
    case 2:
      clonedTab2[2]
      console.log(clonedTab2[2]);
      break;
    case 3:
      clonedTab2[3]
      console.log(clonedTab2[3]);
      break;
  }
  
}


// -----------------------------------------------------BOUTON SELECT PERSO JOUEUR 1 --------------------------------------------------

const selec = document.getElementById("validPerso1")

selec.addEventListener('click', () => {
    const croco = document.getElementById('croco')
    croco.style.display = 'inline';
    checkDisplay();
});

// -----------------------------------------------------BOUTON SELECT PERSO JOUEUR 2 --------------------------------------------------


const select = document.getElementById("validPerso2")

select.addEventListener('click', () => {
    const shushu = document.getElementById('shushu')
    shushu.style.display = 'inline';
    checkDisplay();
});

// -----------------------------------------------------BOUTON COMMENCEZ LA PARTIE --------------------------------------------------


function checkDisplay() {
    const croco = document.getElementById('croco');
    const shushu = document.getElementById('shushu');
    const game = document.getElementById('game');

    if (croco.style.display === 'inline' && shushu.style.display === 'inline') {
      setTimeout(function() {
        game.style.display = 'inline';
    }, 1500); // 
}
}

// ------------------------------------------------------TABLEAU DES PERSONNAGES---------------------------------------------------

const tab = [
  
  {
    nom: "Iop",
    pdv: 5000,
    pa: 10,
    atk: 600,
    dfs: 200
},
{
  nom: "Eniripsa",
  pdv: 4500,
  pa: 11,
  atk: 300,
  pvr: 500,
},
{
  nom: "Huppermage",
  pdv: 4000,
  pa: 12,
  atk: 400,
  pvr: 400,
},
{
  nom: "Cra",
  pdv: 3000,
  pa: 10,
  atk: 800,
  esquive : 1
}
];

const clonedTab1 = Array.from(tab);

const clonedTab2 = [...tab];

// ---------------------------------------------------------------SECTION COMBAT---------------------------------------------------

const game = document.getElementById("game")


game.addEventListener('click', () => {
    const personnage = document.getElementById('personnage')
    personnage.style.display = 'none';

    const accueil = document.getElementById('accueil')
    accueil.style.display = 'none';

    const combat = document.getElementById('combat')
    combat.style.display = 'block'
});

const boutonatk = document.getElementById('btnAtk')

boutonatk.addEventListener('click', () => {
  persochoisij2.pdv = persochoisij2.pdv - persochoisij1.atk
  console.log(persochoisij2.pdv);
})

const boutonatk2 = document.getElementById('btnAtk2')

boutonatk2.addEventListener('click', () => {
  persochoisij1.pdv = persochoisij1.pdv - persochoisij2.atk
  console.log(persochoisij1.pdv);
})