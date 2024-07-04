let totalPages; 


fetch("https://rickandmortyapi.com/api/episode")
.then(response => response.json())
.then(data => {
    totalPages = data.info.pages;


    for (let page = 1; page <= totalPages; page++) {
        fetch(`https://rickandmortyapi.com/api/episode?page=${page}`)
        .then(response => response.json())
        .then(data => {
            const episodes = data.results; 


            episodes.forEach(episode => {

                detailsEpisode(episode);
            });
        });
    }
});


function detailsEpisode(episode) {


    const numeroEpisode = document.createElement('h2');
    numeroEpisode.textContent = episode.episode;
    numEpisode.appendChild(numeroEpisode);

    const titreEpisode = document.createElement('h2');
    titreEpisode.textContent = episode.name;
    nomEpisode.appendChild(titreEpisode);


    const dateEpisodeSortie = document.createElement('h2');
    dateEpisodeSortie.textContent = episode.air_date;
    dateEpisode.appendChild(dateEpisodeSortie);


}