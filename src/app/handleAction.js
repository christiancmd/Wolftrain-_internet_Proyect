const store_boxes = Array.from(document.querySelectorAll('.div-grid'));

function recognize_button(e) {
    let detectID = e.target.id;
    console.log(detectID);

    if (detectID === "services-section") {
        window.location.href = "../pages/dashboardServices.php";
    } else if (detectID === "user-section") {
        window.location.href = "../pages/dashboardClient.php";
    } else if (detectID === "home-index") {
        window.location.href = "../pages/home.php";
    } else if (detectID === "register-section") {
        window.location.href = "../pages/registration.php";
    }
}

for (const box_services of store_boxes) {
    box_services.addEventListener('click', recognize_button);
}
