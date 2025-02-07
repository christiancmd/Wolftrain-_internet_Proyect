const error_message_register = (text_content, register, login) => {
    document.querySelector('.register-message').style.display = 'flex';
    document.querySelector('.register-message').style.backgroundColor = '#fe43438b';
    document.querySelector('.register-message').style.border = '1px solid red';
    document.querySelector('.register-message').style.height = '50px';
    document.querySelector('.register-text').textContent = text_content;

    const url = new URL(window.location.href);
    url.searchParams.delete('error');
    window.history.replaceState({}, document.title, url);

    login.style.zIndex = '1';
    register.style.zIndex = '10';
};

const success_message_register = (text_content, register, login) => {
    document.querySelector('.register-message').style.display = 'flex';
    document.querySelector('.register-message').style.backgroundColor = '#65f965a8';
    document.querySelector('.register-message').style.border = '1px solid green';
    document.querySelector('.register-message').style.height = '50px';
    document.querySelector('.register-text').textContent = text_content;

    const url = new URL(window.location.href);
    url.searchParams.delete('success');
    window.history.replaceState({}, document.title, url);

    login.style.zIndex = '1';
    register.style.zIndex = '10';
}

const error_message_login = (register, login) => {
    document.querySelector('.login-error-message').style.display = 'flex';
    const url = new URL(window.location.href);
    url.searchParams.delete('error');
    window.history.replaceState({}, document.title, url);

    login.style.zIndex = '10';
    register.style.zIndex = '1';
}

document.addEventListener('DOMContentLoaded', (event) => {
    const register_box = document.querySelector('.form-register');
    const login_box = document.querySelector('.form-login');

    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const success = urlParams.get('success');

    console.log(error);

    if (error === '123') {
        //Login Warning Message
        error_message_login(register_box, login_box);

    } else if (error === '456') {
        //Register Email Warning Message
        error_message_register('EL CORREO YA EXISTE!', register_box, login_box);

    } else if (error === '789') {
        //Register Username Warning Message
        error_message_register('EL USUARIO YA EXISTE!', register_box, login_box);
    } else if (success) {
        success_message_register('REGISTRO EXITOSO!', register_box, login_box);
    }
});


