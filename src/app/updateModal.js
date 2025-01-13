const button_update = Array.from(document.querySelectorAll('.btn-edit'));
const modal_update = document.querySelector('#modal-update');



function getInfo(array_td, id) {

    let array_text = [];
    let pos = 0;
    for (const element of array_td) {
        array_text[pos] = element.innerText;
        pos++;
    }

    const input_name = modal_update.querySelector('.update-form #username');
    const input_email = modal_update.querySelector('.update-form #email');
    const input_user = modal_update.querySelector('.update-form #user');
    const input_service = modal_update.querySelector('.update-form #service');
    const input_id = modal_update.querySelector('.update-form #idUser');

    input_id.value = id;
    input_name.value = array_text[0];
    input_email.value = array_text[1];
    input_user.value = array_text[2];
    input_service.value = array_text[3];

}

function blockModal(e) {

    let indentification_ID = e.target.id;


    let count_cell = e.target.parentElement.parentElement.childNodes;
    array = Array.from(count_cell);
    let elementos_Td = array.filter(node => node.tagName && node.tagName.toLowerCase() === 'td');

    elementos_Td.pop();
    elementos_Td.shift();

    getInfo(elementos_Td, indentification_ID);
    //Mandar array de informacion

    let user = e.target.classList[1] + ' ' + e.target.classList[2];



    console.dir(modal_update.style);

    modal_update.style.display = "Block";

    const close_modal_update = document.querySelector('.no-update-button');
    const action_update_button = document.querySelector('.delete-action-button');

    window.addEventListener('click', (event) => {
        if (event.target === modal_update) {
            modal_update.style.display = "none";
        }
    });

    close_modal_update.addEventListener('click', (e) => {
        e.preventDefault();
        modal_update.style.display = "none";
    });



    /* action_update_button.addEventListener('click', action_update(indentification_ID));*/
}

for (const button of button_update) {
    button.addEventListener('click', blockModal);
}



