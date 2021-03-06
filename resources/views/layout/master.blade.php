<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')VN Express</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="" class="logo">Logo</a>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        @if (Route::has('customer.login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('customer.login') }}">Log in</a>

                                @if (Route::has('customer.register'))
                                    <a href="{{ route('customer.register') }}">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </header>

        @include('layout.menu')

        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
