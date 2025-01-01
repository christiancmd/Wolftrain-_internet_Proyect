const store_boxes = Array.from(document.querySelectorAll('.div-grid'));

for (const box_services of store_boxes) {
    box_services.addEventListener('click', (e) => {
        if (e.target.id !== 'home-index') {
            const url = "http://localhost/Wolftrain-internet-Proyecto/src/pages/" + e.target.id;
            window.location.href = url;
        } else {
            window.location.href = "http://localhost/Wolftrain-internet-Proyecto/index.html";
        }
    });
}
