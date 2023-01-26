<!DOCTYPE html>
<html>

<head lang="ru">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <button type="button" class="btn btn-outline-secondary"onclick='location.href="/"'>Home</button>
                </ul>

                <div class="text-end">
                    @if (auth()->check())
                        <button type="button" class="btn btn-success" onclick='location.href="/logout"'>Logout {{ Auth::user()->name }}</button>
                    @else
                        <button type="button" class="btn btn-success" onclick='location.href="/login"'>Login</button>
                        <button type="button" class="btn btn-success" onclick='location.href="/signup"'>Sign-up</button>
                    @endif
                    <button type="button" class="btn btn-warning" onclick='location.href="/cart"'>Cart</button>
                </div>
            </div>
        </div>
    </header>
    <div>@yield('main_content')</div>
</body>

</html>
