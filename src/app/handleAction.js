const store_boxes = Array.from(document.querySelectorAll('.div-grid'));

for (const box of store_boxes) {  // Se debe actualizar las rutas de los enlaces
    box.addEventListener('click', (e) => {
        if (e.target.id === 'first-article') {
            window.location.href = `../pages/services.html`;
        } else if (e.target.id === 'second-article') {
            window.location.href = `../pages/services.html`;
        } else if (e.target.id === 'third-article') {
            window.location.href = `../pages/services.html`;
        } else if (e.target.id === 'fourth-article') {
            window.location.href = `../pages/services.html`;
        } else {
            window.location.href = `../pages/registration.php`;
        }

    });
}

