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


let titre = document.createElement('h1')
titre.id = "titre"
document.body.appendChild(titre);
titre.textContent = data.type + ' ' + data.nom

let prix = document.createElement('p')
prix.id = 'prix'
document.body.appendChild(prix);
prix.textContent = data.price;

let nappage = document.createElement('p')
nappage.id = 'nappage'
document.body.appendChild(nappage);
nappage.textContent = data.nappages.nappage[0].type + ' ' + data.nappages.nappage[1].type + ' ' + data.nappages.nappage[2].type + ' ' + data.nappages.nappage[3].type

let inputNappage = document.createElement('input')
inputNappage.type = "radio"
document.body.appendChild(inputNappage);



