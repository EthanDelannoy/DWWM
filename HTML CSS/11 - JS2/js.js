function handleKeyDown(event) {

    console.log(event.keyCode);
}

document.addEventListener("keydown", handleKeyDown);

// -----------------------------------------CHANGER LA COULEUR DU BACKGROUND QUAND ON CLIQUE SUR LE RECTANGLE------------------------

let rectangle1 = document.getElementById('rectangle1');

function rectangle(event) {
console.log(event);

    const element = event.target
    element.style.backgroundColor = 'blue';
}

rectangle1.addEventListener('click', rectangle);

let rectangle2 = document.getElementById('rectangle2');

function rectangle(event) {
    console.log(event);

    const element = event.target
    element.style.backgroundColor = 'red';
}

rectangle2.addEventListener('click', rectangle);

let rectangle3 = document.getElementById('rectangle3');

function rectangle(event) {
    console.log(event);

    const element = event.target
    element.style.backgroundColor = 'black';
}

rectangle3.addEventListener('click', rectangle);

let rectangle4 = document.getElementById('rectangle4');

function rectangle(event) {
    console.log(event);

    const element = event.target
    element.style.backgroundColor = 'purple';
}

rectangle4.addEventListener('click', rectangle);

// ----------------------------------------------CARRE VIOLET QUI DONNE LA POSITION DE LA SOURIS AU SURVOL-----------------------------

const carre = document.getElementById('carre');

function souris(event) {

    const x = event.clientX;
    const y = event.clientY;

    console.log( x, y);

}
carre.addEventListener('mousemove', souris);

// ------------------------------------------------------------------BOUTON CURSEUR------------------------------------------------



let boutondiv;

document.getElementById('creationDiv').addEventListener('click', function(){
    boutondiv = document.createElement("div");
    boutondiv.id = "boutondiv";
    document.body.appendChild(boutondiv);
});

carre.addEventListener('mousemove', function(event) {

    if(boutondiv) {
        let x = event.clientX;
        let y = event.clientY;

        const offsetX = boutondiv.offsetWidth / 2;
        const offsetY = boutondiv.offsetHeight / 2;

        boutondiv.style.left = x - offsetX + 'px';  
        boutondiv.style.top = y - offsetY + 'px';

        boutondiv.style.display = "block";
    } 


    carre.addEventListener('mouseleave', function() {
        if(boutondiv) {
            boutondiv.style.display = "none";
        }
    });
});

// ----------------------------------------------------------------TIME OUT--------------------------------------------------------

let RectangleRouge;
let rectabngleBleu;

let rectangleTimeOut = document.getElementById('rectangleTimeOut')


rectangleTimeOut.addEventListener('click', function(){
    RectangleRouge = document.createElement("div")
    RectangleRouge.id = "RectangleRouge"
    document.body.appendChild(RectangleRouge);

    RectangleRouge.addEventListener('click', function(){
        supp(RectangleRouge)
    });


    setTimeout(function() {
        rectabngleBleu = document.createElement("div")
        rectabngleBleu.id = "rectabngleBleu"
        document.body.appendChild(rectabngleBleu);

        rectabngleBleu.addEventListener('click', function(){
            supp(rectabngleBleu)
        });
    }, 3000); 


})



function supp (div) {
    let body = document.querySelector('body')
    body.removeChild(div)
}





