let form = document.getElementById('form')

form.addEventListener('submit', function(event) {
    event.preventDefault()
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let telephone = document.getElementById('telephone').value;
    let message = document.getElementById('message').value;


    let info = {
        nom,
        prenom,
        telephone,
        message
    };

    console.log(info);
});