<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games Collection</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="{{ asset('js/javascript.js') }}" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default row" role="navigation" >
            
            <div class="col-md-6">
                <a href="{{ action('GamesController@index') }}" class="navbar-brand">Games Collection</a>
            </div>
            
            <div class="col-md-1" style="position:fixed; margin-left:900px;">
                @if (Session::has('username'))
                    <a href="{{ action('UsersController@logout') }}" class="navbar-brand btn btn-default">Logout {{ Session::get('username') }}</a>
                @elseif (Request::is('register'))
                    <a href="{{ action('UsersController@login') }}" class="navbar-brand">Sign In</a>
                @else
                    <a href="{{ action('UsersController@register') }}" class="navbar-brand">Sign Up</a>
                @endif
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>