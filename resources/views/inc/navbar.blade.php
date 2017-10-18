<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon bar"></span>
                <span class="icon bar"></span>
                <span class="icon bar"></span>
            </button>
            <a class="navbar-brand" href="#">Fresh website</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            {{--<li class="active"><a href="/">Home</a></li>--}}
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{ asset('/') }}">Home</a></li>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="{{ asset('/about') }}">About</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{ asset('/contact') }}">Contact</a></li>
        </ul>
        {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
            {{--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
        {{--</ul>--}}
    </div>
    </div>
</nav>
