/*Z-index Position*/

const registerBox = document.querySelector('.form-register');
const loginBox = document.querySelector('.form-login');

const b_register = document.querySelector('#b-register');
const b_login = document.querySelector('#b-login');

console.log(b_register);
console.log(b_login);

b_register.addEventListener('click', (e) => {
    loginBox.style.zIndex = '10';
    registerBox.style.zIndex = '1';
});

b_login.addEventListener('click', (e) => {
    loginBox.style.zIndex = '1';
    registerBox.style.zIndex = '10';
});