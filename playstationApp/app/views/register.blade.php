@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Register Now <small>and point your country also!</small></h1>
    </div>
    
    <form action="{{ action('UsersController@handleRegister') }}" method="POST" role="form" >
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label for="repassword">Repeat Password</label>
            <input type="password" class="form-control" name="repassword" />
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select name="country" class="form-control">
                <option value="">Select your country</option>
                @foreach($countries as $key => $val)
                    <option value="{{ $key }}">{{ $val }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Register" class="btn btn-primary" />
        <a href="{{ action('UsersController@login') }}" class="btn btn-link">Have an accoun already? Sign In Here!</a>
        
    </form>
@stop