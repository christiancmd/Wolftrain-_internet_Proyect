
//////////////////////////////////////////////////////////////////////////////////////////////////////
/*Button hero */

const button_hero = document.querySelector('#button-hero');
const input_principal = document.querySelector('#input-principal')


function alertText() {
    window.location.href = "http://localhost/Wolftrain-internet-Proyecto/src/pages/registration.php"
}

function alertHero(e) {
    if (input_principal.value) {
        input_principal.value = '';
        alertText();
    }
}
button_hero.addEventListener('click', alertHero);
