<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/tasks/home">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="/user/login">Login</a>
            </li> --}}
            <li class="nav-item active">
                <form method="GET" action="/user/logout">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>

            </li>
        </ul>
    </div>
</nav>
