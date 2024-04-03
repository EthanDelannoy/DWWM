let nombre1 = 5;
let nombre2 = 3;

let resultatAddition = nombre1 +  nombre2

console.log(resultatAddition);

let nombre3 = 10;
let nombre4 = 7;

let resultatSoustraction = nombre3 -  nombre4

console.log(resultatSoustraction);

let nombre5 = 4;
let nombre6 = 6;

let resultatMultiplication = nombre5 *  nombre6

console.log(resultatMultiplication);

let	prénom = "John";
let	nom = "doe";

console.log(prénom + " " + nom);


let sujet = "Le chat";
let verbe = " mange";
let objet = " la souris";

let phrase = sujet + verbe + objet;

console.log(phrase);

let tableau = [1, 2, 3, 4, 5]
tableau.forEach(element => {
    console.log(element);
});

let tableau2 = []

tableau2.push(10)
tableau2.push(20)
tableau2.push(30)

console.log(tableau2);

tableau2.shift(0)

console.log(tableau2);

let personne = {
	nom: 'Alice',
	age: 25,
	ville: 'Paris' 
	};

    console.log(personne);

    let personne2 = {
        solde: '1000',
        titulaire: 'John Doe',
        };
    
     personne2.solde = personne2.solde + 500

    console.log(personne2);


    function saluer(Alice) {
        return "Bonjour," + " Alice "
    }

    console.log(saluer("Alice"));


    let Multiplication;

    function multipli() {
        const a = 7;
        const b = 8;

        Multiplication = 7 * 8;
    }
    multipli();

     console.log(Multiplication);





    function determineage(age){
     if (age >= 18) { 
        console.log("majeur");
     }

     else { 
        console.log("mineur");
     }
    }
    determineage(18)

     for (let i = 2; i <= 20; i += 2) {
        console.log(i);
     }


    //  const randomNumber = Math.floor((Math.random() * 100) +1)
     let tentative = prompt ("Entrez un nombre aléatoire entre 1 et 100")

     while (tentative !== '72') {
        console.log("Mauvaise réponse, essaie encore");
        tentative = prompt ("Perdu. Entrez un nombre aléatoire entre 1 et 100")
     }

     console.log("Bravo, tu as gagné... Rien");



     function nombreJoursDansMois(mois, annee) {
        
        const bissextile = (annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0);
    
        const joursParMois = [
            31, // janvier
            bissextile ? 29 : 28, // février
            31, // mars
            30, // avril
            31, // mai
            30, // juin
            31, // juillet
            31, // août
            30, // septembre
            31, // octobre
            30, // novembre
            31  // décembre
        ];
    
        
        if (mois < 1 || mois > 12) {
            return "Mois invalide";
        }
    
        // Retourne le nombre de jours dans le mois spécifié
        return joursParMois[mois - 1];
    }
    
    
    const mois = 2; 
    const annee = 2024;
    console.log(nombreJoursDansMois(mois, annee));