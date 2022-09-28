<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">FEC OJ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contests">Contests</a>
                <li><a class="nav-link" href="/create_problem">Create Problem</a></li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/problemset">Problemset</a>
                </li>

            </ul>
            {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
            <ul class="navbar-nav me-end mb-2 mb-lg-0">
                @guest
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->handle }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/u/{{Auth::user()->handle}}">Profile</a></li>
                            <li><a class="dropdown-item" href="/submissions">Submissions</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="/logout">Settings</a></li>
                            <li><a class="dropdown-item" href="/logout">Create Problem</a></li>
                            <li><a class="dropdown-item" href="/logout">Help</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
