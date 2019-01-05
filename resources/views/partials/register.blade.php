<div class="popup" id="popup-register">
    <div class="popup__background" id="background-register"></div>
    <form method="POST" class="form" id="register-form">
        {{csrf_field()}}
        <h3 class="heading-tertiary">Sign up to Boarding Life</h3>
        <div class="form__group">
            <label for="name" class="form__label">Name</label>
            <input type="text" class="form__field" id="name" name="name" placeholder="ex: John Doe" required autofocus>
        </div>

        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <input type="email" class="form__field" id="email" name="email" placeholder="ex: john.doe@gmail.com" required>
        </div>

        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <input type="password" class="form__field" id="password" name="password" placeholder="ex: flyingcat101" required>
        </div>

        <div class="form__group">
            <label for="confirm_password" class="form__label">Confirm Password</label>
            <input type="password" class="form__field" id="confirm_password" name="confirm_password" placeholder="ex: flyingcat101" required>
        </div>

        <div class="form__group">
            <div id="error-message"></div>
        </div>

        <div class="form__group">
            <input type="submit" id="btn-register" class="form__submit" value="Register">
        </div>
    </form>
</div>