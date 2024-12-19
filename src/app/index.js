
//////////////////////////////////////////////////////////////////////////////////////////////////////
/*Button hero */

const buttonHero = document.querySelector('#button-hero');
const inputPrincipal = document.querySelector('#input-principal')


function alertText() {
    alert('Procedimiento fallido, no hay servidor');
}

function alertHero(e) {
    if (inputPrincipal.value) {
        inputPrincipal.value = '';
        alertText();
    }
}
buttonHero.addEventListener('click', alertHero);
