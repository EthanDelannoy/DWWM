// let burger = document.getElementById('burger');
// let p = document.getElementById('burgouve');

// burger.addEventListener('click', function(){
//     if (p.textContent === "Accueil Contact Avis") {
//         p.textContent = "";
//         p.style.backgroundColor = 'initial'
//     } 
//     else {
//         p.textContent = "Accueil Contact Avis";
//         p.style.backgroundColor = 'red';
//     }
// });


    // Récupérer le bouton du menu burger
const burgerMenu = document.getElementById('burgerMenu');

// Ajouter un écouteur d'événements pour le clic sur le bouton
burgerMenu.addEventListener('click', function() {
    // Basculer la classe 'change' sur le bouton
    burgerMenu.classList.toggle('change');
     if (na.textContent === "Accueil Contact Avis") {
         na.textContent = "";
         na.style.backgroundColor = 'initial'
     } 
     else {
        na.textContent = "Accueil Contact Avis";
         na.style.backgroundColor = 'black';
        
     }
});



