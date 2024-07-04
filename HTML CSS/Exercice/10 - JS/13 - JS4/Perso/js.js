let pages;

fetch("https://rickandmortyapi.com/api/character?page=1")
.then(response => response.json())
.then(data => {
    pages = data.info.pages;
    setTimeout(() => {
        for (let index = 1; index <= pages; index++) {
            fetch('https://rickandmortyapi.com/api/character?page=' + index)
            .then(response => response.json())
            .then(data => {
                data.results.forEach(character => {
                    createCard(character);
                });
            });
        }
    }, 3000);
});

function createCard(character) {

    const card = document.createElement('div');
    card.classList.add('card');


    const image = document.createElement('img');
    image.src = character.image;
    image.alt = character.name;
    card.appendChild(image);


    const name = document.createElement('h2');
    name.textContent = character.name;
    card.appendChild(name);


    document.getElementById('cards-container').appendChild(card);
}