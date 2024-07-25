import React from 'react';

function Personne(props){
    return(
        <div>
            <h1>Nom : {props.nom}</h1>
            <div>Age : {props.age} | Année(s) : {new Date().getFullYear() - props.age}</div>
            <div>Sexe : {props.sexe}</div>
        </div>
    )
}

export default Personne;