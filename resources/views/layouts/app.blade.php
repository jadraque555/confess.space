<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta property='og:title' content='Confess Space'/>
    <meta property='og:image' content='{{ asset("img/thumbnail.png") }}'/>
    <meta property='og:description' content='Confess Space'/>
    <meta property='og:url' content='{{ url("/") }}'/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website'/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&display=swap"
      rel="stylesheet"
    />
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8PDJG8MQ8K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8PDJG8MQ8K');
    </script>

    <title>{{ config('app.name', 'Confess Space') }}</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="d-flex justify-content-md-between flex-md-row flex-column">
          <img src="{{ asset('img/logo_w@2x.png') }}" class="logo-image" />
          <div class="mr-md-4 auth-btn d-flex justify-content-sm-between">
            @if (Route::has('login'))
                @if (Auth::check())
                <a><button class="mr-5" onClick="window.location.href='{{ url('home') }}'">Inbox</button></a>
                <a><button class="" onClick="window.location.href='{{ url('logout') }}'">Logout</button></a>
                @else
                <a><button class="mr-md-5 mr-2" onClick="window.location.href='{{ url('register') }}'">Get Started</button></a>
                <a><button class="" onClick="window.location.href='{{ url('login') }}'">Login</button></a>
                @endif
            @endif
          </div>
        </div>
      </header>

      <div class="content">
            @yield('content')
      </div>
    </div>
    <br />
    <br />
    <br />
    <footer>
      <div class="first-column">
        <div class="row">
          <div class="col-md-3 text-center"><label>TERMS OF USE</label></div>
          <div class="col-md-3 text-center"><label>DISCLAIMER</label></div>
          <div class="col-md-3 text-center"><label>COOKIE POLICY</label></div>
          <div class="col-md-3 text-center"><label>PRIVACY POLICY</label></div>
        </div>
      </div>
      <div class="second-column text-center p-3">
        © 2022 Copyright: Confess.Space
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')
    
  </body>
</html>
