<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">ShandiLogic</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{ route('portofolio.index') }}" class="nav-link"><span>Home</span></a>
                </li>
                <li class="nav-item"><a href="{{ route('portofolio.about') }}" class="nav-link"><span>About</span></a>
                </li>
                <li class="nav-item"><a href="{{ route('portofolio.resume') }}" class="nav-link"><span>Resume</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="{{ route('portofolio.project') }}" class="nav-link"><span>Projects</span></a></li>
            </ul>
            <a href="{{ url('/login') }}" class="btn btn-primary btn-lg">Login</a>
        </div>

    </div>
</nav>
