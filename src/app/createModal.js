const modal_create = document.querySelector('#modal-create');
const button_create = document.querySelector('.btn-register');

function blockModal(e) {
    e.preventDefault(); // Previene el comportamiento predeterminado y no actualiza el navegador
    modal_create.style.display = "Block";

    const close_modal_create = document.querySelector('.no-button-register');
    /* const action_create_button = document.querySelector('.button-register');*/

    window.addEventListener('click', (event) => {
        if (event.target === modal_create) {
            modal_create.style.display = "none";
        }
    });

    close_modal_create.addEventListener('click', () => {
        modal_create.style.display = "none";
    });

}

button_create.addEventListener('click', blockModal);

