
//////////////////////////////////////////////////////////////////////////////////////////////////////
/*Button hero */

const button_hero = document.querySelector('#button-hero');
const input_principal = document.querySelector('#input-principal')


function alertText() {
    alert('Procedimiento fallido, no hay servidor');
}

function alertHero(e) {
    if (input_principal.value) {
        input_principal.value = '';
        alertText();
    }
}
button_hero.addEventListener('click', alertHero);



