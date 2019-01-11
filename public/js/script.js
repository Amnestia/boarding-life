$(document).ready(()=>{
    let DOMStrings = {
        loginLink: "#navigation__login",
        registerLink: "#navigation__register",
        logoutLink: "#navigation__logout",
        popupLogin: '#popup-login',
        popupBackground: '.popup__background',
        loginForm: '#login-form',
        popupRegister: '#popup-register',
        registerForm: '#register-form',
        popupBackgroundRegister: '#background-register',
        btnRegister: '#btn-register',
        btnLogin: '#btn-login',
        errMessage: '#error-message',
        loadingIndicator: '#reg-loading-indicator',
        searchNav: '#search-nav',
    };

    const login = document.querySelector(DOMStrings.loginLink);
    const register = document.querySelector(DOMStrings.registerLink);
    const popupLogin = document.querySelector(DOMStrings.popupLogin);
    const popupBackground = document.querySelector(DOMStrings.popupBackground);
    const loginForm = document.querySelector(DOMStrings.loginForm);
    const popupRegister = document.querySelector(DOMStrings.popupRegister);
    const registerForm = document.querySelector(DOMStrings.registerForm);
    const popupBackgroundRegister = document.querySelector(DOMStrings.popupBackgroundRegister);
    const registerErrorMessage=DOMStrings.registerForm+" > .form__group > "+DOMStrings.errMessage;
    const loginErrorMessage=DOMStrings.loginForm+" > .form__group > "+DOMStrings.errMessage;
    $(DOMStrings.loadingIndicator).hide();

    login.addEventListener('click', () => {
        popupLogin.classList.add('show');
        loginForm.classList.add('show-form');
    });

    register.addEventListener('click', () => {
        popupRegister.classList.add('show');
        registerForm.classList.add('show-form');
    });

    popupBackground.addEventListener('click', () => {
        popupLogin.classList.remove('show');
        loginForm.classList.remove('show-form');
    });

    popupBackgroundRegister.addEventListener('click', () => {
        popupRegister.classList.remove('show');
        registerForm.classList.remove('show-form');
    });

    function showHide(toShow, toHide)
    {
        $(toShow).show();
        $(toHide).hide();
    }

    function setErrorMessage(errMessageComponent,errMessage)
    {
        $(errMessageComponent).addClass("err-message").html(errMessage);
    }
});