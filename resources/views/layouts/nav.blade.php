<header class="masthead mb-auto">
    <div class="inner">
        <h3 class="masthead-brand">Cover</h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="http://newlaravel.test/">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="http://newlaravel.test/register">Register</a>
            <a class="nav-link" href="http://newlaravel.test/login" class="btn btn-lg btn-secondary">Login</a>
            <a class="nav-link" href="http://newlaravel.test/logout" class="btn btn-lg btn-secondary">Logout</a>
            @if(Auth::check())
            <a class="nav-link" href="#">{{Auth::user()->name}}</a>
            @endif

        </nav>
    </div>
</header>