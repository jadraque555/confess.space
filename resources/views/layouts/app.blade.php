<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="site.html">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5"> 
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="theme-color" content="#8a2be2">


    <meta property='og:title' content='Confess Space'/>
    <meta property='og:image' content='{{ asset("img/thumbnail.png") }}'/>
    <meta property='og:description' content='Confess Space'/>
    <meta property='og:url' content='{{ url("/") }}'/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website'/>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha512-k78e1fbYs09TQTqG79SpJdV4yXq8dX6ocfP0bzQHReQSbEghnS6AQHE2BbZKns962YaqgQL16l7PkiiAHZYvXQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style3860.css?v=1') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/jquery.min.js') }}" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha512-ANkGm5vSmtDaoFA/NB1nVJzOKOiI4a/9GipFtkpMG8Rg2Bz8R1GFf5kfL0+z0lcv2X/KZRugwrAlVTAgmxgvIg==" crossorigin="anonymous"></script>

    <title>Confess Space</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="logo" href="index.html">Confess.space</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto">&nbsp;</div>
            <div class="mt-2 mt-lg-0">
            @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('register') }}" class="btn btn-outline-light mr-1">Inbox</a>
                    <button type="button" class="btn btn-outline-light ml-1" data-toggle="modal" data-target="#logout">
                    Log out
                    </button>
                @else
                <a href="{{ url('register') }}" class="btn btn-outline-light mr-1">Create Account</a>
                <a href="{{ url('login') }}" class="btn btn-outline-light ml-1">Login</a>
                @endif
            @endif
            </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
