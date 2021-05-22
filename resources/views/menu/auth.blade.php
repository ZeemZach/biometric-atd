<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">ATTENDANCE PORTAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item {{Route::currentRouteNamed('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteNamed('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">AboutUs</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteNamed('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">ContactUS</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="nav-link logout" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
</header>