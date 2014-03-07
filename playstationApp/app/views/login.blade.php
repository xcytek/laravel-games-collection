@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Login Now <small>see all the action!</small></h1>
    </div>
    
    <form action="{{ action('UsersController@handleLogin') }}" method="POST" role="form" >
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <input type="submit" value="Sign In" class="btn btn-primary" />
        <a href="{{ action('UsersController@register') }}" class="btn btn-link">Need an account? Register yourself!</a>
        
    </form>
@stop