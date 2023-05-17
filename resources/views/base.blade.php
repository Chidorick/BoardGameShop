<!DOCTYPE html>
<html>

<head lang="ru">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <button type="button" class="btn-ok mx-3" onclick="location.href='/';">OkOk</button>
            </ul>

            <div class="text-end mx-3 mx-lg-5">
                @if (auth()->check())
                    <button type="button" class="btn btn-success btn-lg wider-font"
                        onclick='location.href="/logout"'>Logout
                        {{ Auth::user()->name }}</button>
                @else
                    <button type="button" class="btn btn-success btn-lg wider-font"
                        onclick='location.href="/login"'>Login</button>
                    <button type="button" class="btn btn-success btn-lg wider-font"
                        onclick='location.href="/signup"'>Sign-up</button>
                @endif
                <button type="button" class="btn btn-success btn-lg wider-font" onclick='location.href="/cart"'>
                    <i class="fas fa-shopping-cart"></i> Cart
                </button>
            </div>
        </div>

    </header>
    <div>
        @yield('main_content')
    </div>
    <br>
    <br>
    <br>
    <footer class="footer">
        Okorokov N.D. IKBO-02-20
    </footer>
    
</body>

</html>
