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

    $("#insert-form").on('submit',function(e){
        console.log("asd");
        e.preventDefault();
        geocoder = new google.maps.Geocoder();
        var address = document.getElementById('name').value;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status === 'OK') {
                console.log(results);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var mapOptions = {
            zoom: 8,
            center: latlng
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request, callback);
    });

    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                createMarker(results[i]);
            }
        }
    }


});