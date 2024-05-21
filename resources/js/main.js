// dropdown lingue 

let dropdownLingue = document.querySelector("#dropdownLingue");
let lingue = document.querySelector("#lingue");

dropdownLingue.addEventListener("click", () => {

    lingue.classList.toggle("hidden");
})

// dropdown menu per schermi piccoli 
let menu = document.querySelector("#menu");
let menuNav = document.querySelector("#menuNav");

menu.addEventListener("click", ()=>{

    menuNav.classList.toggle("hidden");
})

document.addEventListener("click", ()=>{
    menuNav.classList.add("hidden");
})

// effetto blur per scroll verticale

let scrollNav = document.querySelector("#scrollNav");

window.addEventListener("scroll", ()=>{
    console.log(window.scrollY);
    if (window.scrollY > 0){
        scrollNav.classList.add("blurNav");
    } else {
        scrollNav.classList.remove("blurNav");
    }
})

// cambi background pag contatti

// let bgContacts = document.querySelector('#bgContacts');

// let backgrounds = [
//     'linear-gradient(rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15)), url(media/img/IMG_5492.jpg)',
//     'linear-gradient(rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15)), url(media/img/IMG_5493.jpg)',
//     'linear-gradient(rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15)), url(media/img/IMG_5497.jpg)',
//     'linear-gradient(rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15)), url(media/img/IMG_5571.jpg)',
// ];


// let i = 0;
// function changeBg(){
//     bgContacts.style.backgroundImage = backgrounds[i];
//     bgContacts.classList.add('bg-contacts');
//     i++;
//     if(i >= 4){
//         i = 0;
//     }
// }

// bgContacts.style.backgroundImage = backgrounds[3];
// bgContacts.classList.add('bg-contacts');
// setInterval(changeBg, 5000);

