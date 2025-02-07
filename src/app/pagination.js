document.addEventListener('DOMContentLoaded', (event) => {
    const url = new URL(window.location.href);
    url.searchParams.delete('pagina');
    window.history.replaceState({}, document.title, url);
});


const filter = document.querySelector('#input-filter');
const button = document.querySelector('#button-filter');

button.addEventListener('click', (event) => {
    const url = new URL(window.location.href);
    console.log(url);


});

