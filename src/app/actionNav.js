//////////////////////////////////////////////////////////////////////////////////////////////////////
/*Button active-nav-mobile */

const activeNavMobileButton = document.querySelector('#active-nav-button');
const navigator = document.querySelector('.ul-list-mobile');
const sectionPrincipal = document.querySelector('.featured-products');




const actionNavMobile = () => {
    sectionPrincipal.classList.remove('dark-mode');
    navigator.classList.toggle('action-nav');
}

function activeNavMobile(e) {
    sectionPrincipal.classList.add('dark-mode');
    navigator.classList.toggle('action-nav');

    // actionNavMobile();
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
