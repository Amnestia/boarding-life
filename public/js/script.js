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


    $(DOMStrings.registerForm).on('submit',(e)=>{
        e.preventDefault();
        let registerFormDiv=DOMStrings.registerForm+" > .form__group";
        let name=$(registerFormDiv+" > #name").val();
        let email=$(registerFormDiv+" > #email").val();
        let password=$(registerFormDiv+" > #password").val();
        let password_confirmation=$(registerFormDiv+" > #confirm_password").val();

        $(DOMStrings.errMessage).removeClass().html("");
        showHide(DOMStrings.loadingIndicator,DOMStrings.btnRegister);
        $.ajax({
            headers: {
              'X-CSRF-TOKEN': $("input[name='_token']").val(),
            },
            type: "POST",
            url: "/register",
            data: {
                name: name,
                email: email,
                password: password,
                password_confirmation: password_confirmation,
            },
            dataType: 'json',
            success: function(response)
            {
                if(response['status']===1)
                {
                    let errors=response['errors'];
                    if(errors.email)
                    setErrorMessage(registerErrorMessage, errors.email[0]);
                    else if(errors.password)
                    setErrorMessage(registerErrorMessage, errors.password[0]);
                }
                else
                $(DOMStrings.errMessage).removeClass().html("");
                showHide(DOMStrings.btnRegister,DOMStrings.loadingIndicator);
            }
        });
    });

    $(DOMStrings.loginForm).on('submit',(e)=>{
        e.preventDefault();
        let loginFormDiv=DOMStrings.loginForm+" > .form__group";
        let email=$(loginFormDiv+" > #email").val();
        let password=$(loginFormDiv+" > #password").val();

        $(DOMStrings.errMessage).removeClass().html("");
        showHide(DOMStrings.loadingIndicator,DOMStrings.btnLogin);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val(),
            },
            type: "POST",
            url: "/login",
            data: {
                email: email,
                password: password,
            },
            dataType: 'json',
            success: function(response)
            {
                if(response['status']===1)
                {
                    let errors=response['errors'];
                    if(errors.email)
                        setErrorMessage(loginErrorMessage, errors.email[0]);
                    else if(errors.password)
                        setErrorMessage(loginErrorMessage, errors.password[0]);
                }
                else
                {
                    $(DOMStrings.errMessage).removeClass().html("");

                }
                showHide(DOMStrings.btnLogin,DOMStrings.loadingIndicator);
            }
        });
    });
});