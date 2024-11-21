

const loginContainer = document.querySelector('.loginContainer');
const registerContainer = document.querySelector('.registerContainer');
const registerBtn = document.querySelector('.registerBtnToggle');
const loginBtn = document.querySelector('.loginBtnToggle');

registerBtn.addEventListener('click', () => {

    registerContainer.classList.remove('none');
    loginContainer.classList.add('none');
});


loginBtn.addEventListener('click', () => {

    loginContainer.classList.remove('none');
    registerContainer.classList.add('none');

});

