<div class="popup" id="popup-login">
    <div class="popup__background"></div>
    <form method="POST" class="form" id="login-form">
        {{csrf_field()}}
        <h3 class="heading-tertiary">Login to your account</h3>
        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <input type="email" class="form__field" id="email" name="email" placeholder="ex: john.doe@gmail.com" required autofocus>
        </div>

        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <input type="password" class="form__field" id="password" name="password" placeholder="ex: flyingcat101" required>
        </div>

        <div class="form__group">
            <div id="error-message"></div>
        </div>

        <div class="form__group">
            <input type="submit" id="btn-login" class="form__submit" value="Login">
        </div>
    </form>
</div> 