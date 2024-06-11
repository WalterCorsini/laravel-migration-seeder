// direttive
import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
// per usare i file img 
import.meta.glob(["../img/**"]);

//  adesso per usare un immagine dentro la cartella resources/img
{/* <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo Molisana"> */}