@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="card card-2 col-12 col-sm-8 col-md-7  col-lg-5 col-xl-4 pt-2 m-auto">
    <h1 class="card-title text-center">Login to your account</h1>
    <hr>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="username" class="id">Your ID</label>
            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Enter user ID" required autofocus>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="id">Your PIN</label>
            <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter PIN" required autofocus>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
        <input class="btn btn-block" type="submit" value="Login">
        </div>
        </form>
        <p>Don't Have an account? <a href="{{ url('register') }}">Create Account</a></p>
        <hr>
        <p>
        Lost Pin? Please create a new account
        <br>
        Forgot ID? It is at the end of your shared Link. <br>
        Example: <br>
        If your link is -
        <pre> {{ url('message') }}?id=<mark>gfyjseya</mark></pre>
        Then your id will be -
        <pre><mark>gfyjseya</mark></pre>.
        </p>
    </form>
    </div>
    </div>
</div>
@endsection
