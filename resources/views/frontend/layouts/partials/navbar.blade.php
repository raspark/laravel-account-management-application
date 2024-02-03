<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-code fa-lg"></i>&nbsp; SPARK</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}"
                    href="{{ url('/home') }}"><i class="fas fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}"
                    href="{{ url('/profile') }}"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-user-cog"></i>&nbsp;Hi!&nbsp;{{ explode(' ', Auth::user()->name)[0] }}
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/logout') }}" class="dropdown-item"><i
                            class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>