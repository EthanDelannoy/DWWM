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

    const personnage = document.getElementById('personnage')
    personnage.style.display = 'block'
})

// ---------------------------------------------------------------CARROUSEL----------------------------------------------------------

let slideIndex = 0;

function moveSlide1(n) {
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  slideIndex = (slideIndex + n + totalSlides) % totalSlides;
  const offset = -slideIndex * 100;
  document.querySelector('.carousel-container').style.transform = `translateX(${offset}%)`;
}

// ---------------------------------------------------------------CARROUSEL 2------------------------------------------------------

let slidesIndex = 0;

function moveSlide2(n) {
  const slides = document.querySelectorAll('.slide2');
  const totalSlides = slides.length;
  slidesIndex = (slidesIndex + n + totalSlides) % totalSlides;
  const offset = -slidesIndex * 100;
  document.querySelector('.carousel-container2').style.transform = `translateX(${offset}%)`;
}





