/*Create an account */

const buttonForm = document.querySelector('#button-register');

function voidInput() {
    const nameInput = Array.from(document.querySelectorAll('.input'));
    for (const element of nameInput) {
        element.value = '';
    }
}

function activeButton(e) {
    voidInput();
    event.preventDefault();
    alert('Procedimiento negado. No hay servidor')
}

buttonForm.addEventListener('click', activeButton);
