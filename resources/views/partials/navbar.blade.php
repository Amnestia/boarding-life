<nav class="navigation">
    <ul class="navigation__left">
        <li class="navigation__item">
            <a class="navigation__link" href="/">Logo</a>
        </li>
    </ul>
    <ul class="navigation__right">
        <li class="navigation__item">
            <a class="navigation__link" href="/collection">Near Me</a>
        </li>
        @if(auth()->user())
            <li id='search-nav' class="navigation__item">
                <a class="navigation__link" href="/search">Search</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" id="navigation__logout" href="/logout">Logout</a>
            </li>
        @else
            <li class="navigation__item">
                <a class="navigation__link" id="navigation__login" href="#">Login</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" id="navigation__register" href="#">Register</a>
            </li>
        @endif

    </ul>
</nav>