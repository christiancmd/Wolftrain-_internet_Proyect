const button_delete = Array.from(document.querySelectorAll('.btn-delete'));
const modal_delete = document.querySelector('#modal-delete');
const modal_message = document.querySelector('#modal-message');
let local = window.location.href;



function blockModal(e) {

    let user = e.target.classList[1] + ' ' + e.target.classList[2];
    let text_message = user;
    modal_delete.style.display = "Block";

    const close_modal_delete = document.querySelector('.no-delete-open');
    const action_delete_button = document.querySelector('.delete-action-button');

    window.addEventListener('click', (event) => {
        if (event.target == modal_delete) {
            modal_delete.style.display = "none";
        }
    });

    close_modal_delete.addEventListener('click', () => {
        modal_delete.style.display = "none";
    });

    action_delete_button.addEventListener('click', () => {
        let IDuser = e.target.id;
        let addLocal = window.location.href
        //let addLocal = e.view.location.href;
        //console.log(addLocal);

        document.addEventListener('DOMContentLoaded', (event) => {
            const url = new URL(window.location.href);
            url.searchParams.delete('limit');
            window.history.replaceState({}, document.title, url);
        });

        const dashboardServiceUrl = "http://localhost/Wolftrain-internet-Proyecto/src/pages/dashboardServices.php#";
        const dashboardClientUrl = "http://localhost/Wolftrain-internet-Proyecto/src/pages/dashboardClient.php#";

        //let url = dashboardClientUrl === addLocal ? "../php/deleteUserProcess.php" : "../php/deleteServiceProcess.php";

        let url;
        if (dashboardClientUrl === addLocal) {
            url = "../php/deleteUserProcess.php";
        } else if (dashboardServiceUrl === addLocal) {
            url = "../php/deleteServiceProcess.php";
        } else {
            console.log('Links diferentes');
        }

        // Realizar solicitud AJAX para eliminar el usuario 
        let xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        //xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    modal_message.innerText = text_message;
                    location.reload();
                } else {
                    console.error("Error al realizar la solicitud:", xhr.status, xhr.statusText);
                }
            }
        };
        xhr.send("ID=" + IDuser);
        modal_delete.style.display = "none";

    });
}

for (const button of button_delete) {
    button.addEventListener('click', blockModal);
}
