/* <!-- -------------------------------- -->
<!-- ------------BRANCH HOME------------ -->
<!-- ----------------------------------- --> */



// // ! variables 
// // const darkmodeBtn = document.getElementById('btn-darkmode'); // bouton pour basculer entre les modes
// const darkmodeBtn = document.getElementById('designMode');
// console.log(darkmodeBtn);
const body = document.querySelector("body"); // body pour lui modifier la class au click
// // console.log(body);
const headerLogo = document.getElementById('logo-white');
const footerLogo = document.getElementById('footer__logo');


// // ! evenement
// darkmodeBtn.addEventListener('click', () => {
//     if (body.classList.contains('dark')) { // si le body contient la class dark
//         body.classList.add('light');
//         body.classList.remove('dark');
//         darkmodeBtn.innerHTML = 'Mode nuit';
//         headerLogo.classList.remove('d-none');
//         footerLogo.classList.remove('d-none');
//     } else if (body.classList.contains('light')) {
//         body.classList.add('dark');
//         body.classList.remove('light');
//         darkmodeBtn.innerHTML = 'Mode jour';
//         headerLogo.classList.add('d-none');
//         footerLogo.classList.add('d-none');
//     }
// })





const selectMode = document.getElementById('designMode');
console.log(selectMode);
let counter = 0;
const formBtn = document.getElementById('form-btn');
console.log(formBtn);

const attribute = selectMode.getAttribute("value");
console.log(attribute);

const choices = document.querySelectorAll('.darkmodeChoice');
console.log(choices);



const lightMode = document.getElementById('light-mode');
console.log(lightMode);
const darkMode = document.getElementById('dark-mode');
console.log(darkMode);


selectMode.addEventListener("change", (e) => { 
    const selectValue = selectMode.value;
    console.log(selectValue);
    if (selectValue === "2") {
        console.log('darkmode ok');
        body.classList.add('dark');
        body.classList.remove('light');
        headerLogo.classList.add('d-none');
        footerLogo.classList.add('d-none');
    } else if (selectValue === "1"){
        console.log('lightmode ok');
        body.classList.add('light');
        body.classList.remove('dark');
        headerLogo.classList.remove('d-none');
        footerLogo.classList.remove('d-none');
    }
})



function logCookie(cookie) {
    if (cookie) {
      console.log(cookie.value);
    } else {
        console.log('error');
    }
  }
logCookie();

function getCookie(tabs) {
    var getting = browser.cookies.get({
      url: tabs[0].url,
      name: "designMode",
    });
    getting.then(logCookie);
  }
getCookie();

  var getActive = browser.tabs.query({
    active: true,
    currentWindow: true,
  });
  getActive.then(getCookie);

  console.log(getCookie);


