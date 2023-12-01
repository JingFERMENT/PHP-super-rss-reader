// ! variables

const body = document.querySelector("body"); // body pour lui modifier la class au click
const headerLogo = document.getElementById("logo-white");
const footerLogo = document.getElementById("footer__logo");
const selectMode = document.getElementById("designMode");
const lightMode = document.getElementById("light-mode");
const darkMode = document.getElementById("dark-mode");
const darkModeBurger = document.querySelector('.text-black');
const lightModeBurger = document.querySelector('.text-white');

// ! fonctions

// * récupérer la valeur d'un cookie spécifique à partir du DOM
function getCookie(name) {
    // name attend le nom du cookie que l'on souhaite récupérer
    const cookies = document.cookie.split("; "); // récupère tous les cookies du DOM et les divise en un tableau avec le ; comme séparateur
    console.log(cookies);
    const value = cookies // je récupère tous les cookies
        .find(
            // je fais un find pour trouver le cookie qui correspond à une fonction
            (c) => c.startsWith(name) // dans cette fonction je dis il faut que le nom du cookie commence par ce que j'ai demandé (le nom)
        )
        ?.split("=")[1]; // je sépare par rapport au égal et je récupère le 2eme élément qui est la valeur du cookie. ? est un opérateur optionnel que j'utilise car .find peut renvoyer 'undefined' s'il ne trouve rien.
    console.log(value);
    return value; // si la valeur existe je la retourne
    // cette fonction simplifie le processus de récupération de la valeur d'un cookie spécifique en fournissant simplement le nom du cookie en argument.
}
console.log(getCookie("designMode"));

// * appliquer les class CSS
function getDarkMode() {
    body.classList.add("dark");
    body.classList.remove("light"); // class de base dans le body
    headerLogo.classList.add("d-none"); // modification des logos
    footerLogo.classList.add("d-none");
    darkModeBurger.classList.add("d-none");
    lightModeBurger.classList.remove("d-none");
}
function getLightMode() {
    body.classList.add("light");
    body.classList.remove("dark");
    headerLogo.classList.remove("d-none");
    footerLogo.classList.remove("d-none");
    darkModeBurger.classList.remove("d-none");
    lightModeBurger.classList.add("d-none");
}

// * appliquer le changement de mode sur toutes les pages avec le cookie
function applyDarkmode() {
    if (getCookie("designMode") === "2") {
        // j'utilise la fonction pour récupérer la valeur d'un cookie et si elle est === 2 alors on est en darkmode
        getDarkMode();
    } else if (getCookie("designMode") === "1") {
        // ici on est en lightmode
        getLightMode();
    } else {
        console.log("error");
    }
}
applyDarkmode();

// * appliquer le changement de mode dans le form à la selection des options
function applyDarkmodeInForm() {
    selectMode.addEventListener("change", (e) => {
        const selectValue = selectMode.value;
        if (selectValue === "2") {
            // console.log('darkmode ok');
            getDarkMode();
        } else if (selectValue === "1") {
            // console.log('lightmode ok');
            getLightMode();
        }
    });
}
applyDarkmodeInForm();