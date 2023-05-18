<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">SN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" @if (Route::currentRoutName() == 'homepage') active @endif href="{{route('homepage')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" @if (Route::currentRoutName() == 'courses') active @endif  href="{{route('courses')}}">Corsi</a></li>
                <li class="nav-item"><a class="nav-link"  href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" @if (Route::currentRoutName() == 'contacts') active @endif  href="{{route('contacts')}}">Contatti</a></li>
            </ul>
        </div>
    </div>
</nav>