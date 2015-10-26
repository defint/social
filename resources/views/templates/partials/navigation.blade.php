<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Social</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="#">{{ Auth::user()->getNameOrUsername() }}</a></li>
                    <li><a href="{{ route('auth.signout') }}">Sign Out</a></li>
                @else
                    <li><a href="{{ route('auth.signup') }}">Sign Up</a></li>
                    <li><a href="{{ route('auth.signin') }}">Sign In</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>