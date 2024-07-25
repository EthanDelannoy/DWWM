import React, { Component } from "react";
import Personne from "./Personne";

// class App extends Component{
//     render(){
//         return <h1>Hello world !</h1>
//     }
// }

class App extends Component {
    render() {
        return (
            <>
                <Personne nom="Paul" age={65} sexe="Homme" />
                <br />
                <Personne nom="Titi" age={38} sexe="Femme" />
                <br />
                <Personne nom="Toto" age={12} sexe="Homme" />
            </>
        );
    }
}

export default App;