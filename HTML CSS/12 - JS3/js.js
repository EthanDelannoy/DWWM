let data = {
    "id": "0001",
    "type": "gateau",
    "nom": "donuts",
    "price": 0.55,
    "nappages":
    {
        "nappage":
            [
                { "id": "1001", "type": "Chocolat" },
                { "id": "1002", "type": "Fraise" },
                { "id": "1003", "type": "Framboise" },
                { "id": "1004", "type": "Vanille" }
            ]
    },
    "topping":
        [
            { "id": "5001", "type": "Sans Topping" },
            { "id": "5002", "type": "Perles de sucre" },
            { "id": "5003", "type": "Copos de coco" },
            { "id": "5004", "type": "Billes de chocolat" },
            { "id": "5005", "type": "Vermisselles de chocolat" },
        ]
}


document.body.style.display = 'flex'
document.body.style.gap = 30 +'px'

let card = document.createElement('div')
card.id = 'card'
document.body.appendChild(card);
card.style.backgroundColor = "black"
card.style.width = 750 + 'px'
card.style.height = 450 + 'px'


let titre = document.createElement('h1')
titre.id = "titre"
card.appendChild(titre);
titre.textContent = data.type + ' ' + data.nom
titre.style.textAlign = 'center'
titre.style.fontSize = 46 + 'px'
titre.style.color = 'white'
titre.style.paddingTop = 20 + 'px'

let prix = document.createElement('p')
prix.id = 'prix'
card.appendChild(prix);
prix.textContent = 'prix :' + ' ' + data.price +'€';
prix.style.color = 'white'
prix.style.fontSize = 26 + 'px'
prix.style.paddingLeft = 50 + 'px'
prix.style.paddingTop = 50 + 'px'


let nappage = document.createElement('p')
nappage.id = 'nappage'
card.appendChild(nappage);
nappage.textContent = 'Nappages :' +' '+ data.nappages.nappage[0].type + ' ' + data.nappages.nappage[1].type + ' ' + data.nappages.nappage[2].type + ' ' + data.nappages.nappage[3].type
nappage.style.color = 'white'
nappage.style.display = 'flex'
nappage.style.justifyContent = 'space-around'
nappage.style.fontSize = 26 + 'px'
nappage.style.paddingTop = 50 + 'px'

// ------------------------------------------------------------FORMULAIRE------------------------------------------------------------

let formulaire = document.createElement('form');
formulaire.style.width = 900 + 'px'
formulaire.style.height = 450 + 'px'
formulaire.style.backgroundColor = "violet"
document.body.appendChild(formulaire);

let desirNappage = document.createElement('h2')
desirNappage.id = 'desirNappage'
desirNappage.textContent = 'Que voulez-vous comme nappages ?'
desirNappage.style.textAlign = 'center'
formulaire.appendChild(desirNappage)

let selectedNappage; 
let selectedTopping; 


data.nappages.nappage.forEach(nappage => {
    let inputNappage = document.createElement('input');
    inputNappage.type = 'radio';
    inputNappage.id = nappage.type
    inputNappage.name = "nappage"
    inputNappage.value = nappage.type; 
    formulaire.appendChild(inputNappage);

    inputNappage.addEventListener('click', function() {
        selectedNappage = inputNappage.value; 
    });

    let labelNappage = document.createElement('label');
    labelNappage.textContent = nappage.type;
    labelNappage.htmlfor = nappage.type
    formulaire.appendChild(labelNappage);
    labelNappage.style.color = 'black';
    labelNappage.style.fontSize = '25px';
});

let desirTopping = document.createElement('h2')
desirTopping.id = 'desirNappage'
desirTopping.textContent = 'Que voulez-vous comme topping ?'
desirTopping.style.textAlign = 'center'
formulaire.appendChild(desirTopping)

formulaire.appendChild(document.createElement('br'));

data.topping.forEach(topping => {
    let inputTopping = document.createElement('input');
    inputTopping.type = 'radio';
    inputTopping.id = topping.type
    inputTopping.name = "topping"
    inputTopping.value = topping.type;
    formulaire.appendChild(inputTopping);

    inputTopping.addEventListener('click', function() {
        selectedTopping = inputTopping.value; 
    });

    let labelTopping = document.createElement('label');
    labelTopping.textContent = topping.type;
    labelTopping.htmlfor = topping.type
    formulaire.appendChild(labelTopping);
    labelTopping.style.color = 'black';
    labelTopping.style.fontSize = '20px';
});


let validation = document.createElement('button')
validation.id = 'validation'
validation.textContent = 'Validez ces choix'
validation.style.width = 250 + 'px'
validation.style.height = 50 + 'px'
validation.style.backgroundColor = 'pink'
validation.style.marginLeft = 330 + 'px'
validation.style.marginTop = 70 + 'px'

formulaire.appendChild(validation)


let resume = document.getElementById('validation')
let resumValid = document.createElement('h3')

resume.addEventListener('click', function(event){

    if (selectedNappage === undefined || selectedTopping === undefined) {
        resumValid.textContent = "Veuillez sélectionner un nappage et un topping";
        resumValid.style.color = 'red'
    }
    else {
        resumValid.textContent = 'Vous avez sélectionné : ' + selectedNappage + ' et ' + selectedTopping; 
        resumValid.style.color = 'black'
    }
    event.preventDefault()
    formulaire.appendChild(resumValid)
})




