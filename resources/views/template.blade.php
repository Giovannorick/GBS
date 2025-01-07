<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('/storage/image/bg_logo.png') }}">
    <link rel="stylesheet" href="{{ asset('CSS/template.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link px-3 {{ Request::is('/') ? 'text-warning' : 'text-secondary' }} hover-dark"
                                href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-3 {{ Request::is('category/*') ? 'text-warning' : 'text-secondary' }} hover-dark"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm">
                                <li><a class="dropdown-item {{ Request::is('category/1') ? 'text-warning' : 'text-secondary' }}"
                                        href="/category/1">Adventure</a></li>
                                <li><a class="dropdown-item {{ Request::is('category/2') ? 'text-warning' : 'text-secondary' }}"
                                        href="/category/2">Fantasy</a></li>
                                <li><a class="dropdown-item {{ Request::is('category/3') ? 'text-warning' : 'text-secondary' }}"
                                        href="/category/3">Fiction</a></li>
                                <li><a class="dropdown-item {{ Request::is('category/4') ? 'text-warning' : 'text-secondary' }}"
                                        href="/category/4">Romance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-4 d-none d-xl-block">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('/storage/image/bg_logo.png') }}" alt="logo" width="80"
                                    height="80" class="d-inline-block align-text-top">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 {{ Request::is('publisher') ? 'text-warning' : 'text-secondary' }} hover-dark"
                                href="/publisher">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 {{ Request::is('contact') ? 'text-warning' : 'text-secondary' }} hover-dark"
                                href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- content --}}
    <main class="flex-grow-1">
        <div class="container my-5">
            @yield('content')
        </div>
    </main>
    {{-- footer --}}
    <footer class="mt-auto bg-white border-top shadow-sm text-center text-dark py-3">
        <div class="container">
            <p class="mb-0">&copy; 2022 Happy Book Store</p>
            <p class="mb-0">Made by Giovan Norick Yang</p>
        </div>
    </footer>
</body>

</html>
