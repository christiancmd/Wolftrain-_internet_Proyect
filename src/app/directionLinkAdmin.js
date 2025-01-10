const buttonsAdminHome = Array.from(document.querySelectorAll('.btn-article'));

function recognize_button(e) {
    let id_button = e.target.id;

    if (id_button === "button-user") {
        window.location.href = '../pages/dashboardClient.php';
    } else if (id_button === "button-service") {
        window.location.href = '../pages/dashboardServices.php';
    } else {
        console.log('ERROR DE REDIRECCIÓN');
    }
}

for (const button of buttonsAdminHome) {  ///btn 1, btn 2
    button.addEventListener('click', recognize_button);
}