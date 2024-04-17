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
                    tableau(character);
                });
            });
        }
    }, 3000);
});

function tableau(character) {

    const name = document.createElement('h2');
    name.textContent = character.name;
    nomPersonnage.appendChild(name);

    const location = document.createElement('h2');
    location.textContent = character.location.name;
    LieuPersonnage.appendChild(location);


}