<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')VN Express</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="" class="logo">Logo</a>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <a href="">Login</a>
                    </div>
                </div>
            </div>
        </header>

        <sidebar>
            <div class="container">
                <ul class="main-menu">
                    <li><a href="">Thời sự</a></li>
                    <li><a href="">Góc nhìn</a></li>
                    <li><a href="">Thế giới</a></li>
                    <li><a href="">Video</a></li>
                    <li><a href="">Kinh doanh</a></li>
                </ul>
            </div>
        </sidebar>

        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
