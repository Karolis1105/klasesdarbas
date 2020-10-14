let turiniai = document.querySelectorAll('main > section');
let meniuElementai = document.querySelectorAll('header nav > a');

function pakeistiPuslapi (pslId) {
    for (let i = 0; turiniai.length > i; i++) {
        turiniai[i].style.display ='none';
        meniuElementai[i].classList.remove('active')
    }
    meniuElem.addClass('active');
    document.getElementById(pslId).style.display = "block";
}

//default pls
let defaultElem = document.querySelector('nav:first-child');
pakeistiPuslapi('contacts');