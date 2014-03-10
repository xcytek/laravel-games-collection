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
        <nav class="navbar navbar-default navbar-fixed-top row" role="navigation" style="opacity:0.8;">
            <div class="col-md-6">
                {{ link_to('/', 'Games Collection', $attributes = array('class'=>'navbar-brand'), $secure = null); }}
            </div>
            
            <div class="col-md-6">
                @if (Auth::check())
                    <a href="{{ action('UsersController@logout') }}" class="navbar-brand btn btn-default  navbar-right">Logout 
                        {{ Auth::user()->username . ' <small>'. Auth::user()->email . '</small>' }}</a>
                @elseif (Request::is('register'))
                    <a href="{{ action('UsersController@login') }}" class="navbar-brand  navbar-right">Sign In</a>
                @else
                    <a href="{{ action('UsersController@register') }}" class="navbar-brand  navbar-right">Sign Up</a>
                @endif
            </div>
        </nav>
        <div style="margin:20px 0px">&nbsp;</div>
        @yield('content')
    </div>
</body>
</html>