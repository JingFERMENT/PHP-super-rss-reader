/* <!-- -------------------------------- -->
<!-- ------------BRANCH HOME------------ -->
<!-- ----------------------------------- --> */



// ! variables 
const darkmodeBtn = document.getElementById('btn-darkmode'); // bouton pour basculer entre les modes
// const darkmodeBtn = document.getElementById('designMode');
// console.log(darkmodeBtn);
const body = document.querySelector("body"); // body pour lui modifier la class au click
// console.log(body);
const headerLogo = document.getElementById('logo-white');
const footerLogo = document.getElementById('footer__logo');


// ! evenement
darkmodeBtn.addEventListener('click', () => {
    if (body.classList.contains('dark')) { // si le body contient la class dark
        body.classList.add('light');
        body.classList.remove('dark');
        darkmodeBtn.innerHTML = 'Mode nuit';
        headerLogo.classList.remove('d-none');
        footerLogo.classList.remove('d-none');
    } else if (body.classList.contains('light')) {
        body.classList.add('dark');
        body.classList.remove('light');
        darkmodeBtn.innerHTML = 'Mode jour';
        headerLogo.classList.add('d-none');
        footerLogo.classList.add('d-none');
    }
})



/* <!-- -------------------------------- -->
<!-- ------------BRANCH HOME------------ -->
<!-- ----------------------------------- --> */