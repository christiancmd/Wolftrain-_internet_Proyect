//////////////////////////////////////////////////////////////////////////////////////////////////////
/*Button active-nav-mobile */

const activeNavMobileButton = document.querySelector('#active-nav-button');
const navigator = document.querySelector('.ul-list-mobile');

console.dir(navigator);


const actionNavMobile = () => {
    navigator.classList.toggle('action-nav');
}

function activeNavMobile(e) {
    actionNavMobile();
    const closeButton = document.querySelector('#icon-close');
    closeButton.addEventListener('click', actionNavMobile);
}

const handleResize = () => {
    if (navigator.id !== 'nav-php') {
        if (window.innerWidth > 1000) {
            navigator.classList.remove('ul-list-mobile');
            navigator.classList.add('ul-nav-desktop');
        }
        else {
            navigator.classList.remove('ul-nav-desktop');
            navigator.classList.add('ul-list-mobile');
            // navigator.classList.remove('action-nav');
        }
    }
}

activeNavMobileButton.addEventListener('click', activeNavMobile);
window.addEventListener('resize', handleResize);
window.addEventListener('load', handleResize);
