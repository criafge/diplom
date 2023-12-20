@php
    use Illuminate\Support\Facades\Vite;
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GlobalSpeak</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    GlobalSpeak
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Обучение у нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Тест</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto gap-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a id="reg-btn" class="btn gradient-border"
                                        href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a id="login-btn" class="btn gradient" href="{{ route('login') }}">Войти</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item links-header">
                                <a href="#">Уроки</a>
                            </li>
                            <li class="nav-item links-header">
                                <a href="{{route('add-lesson')}}">Добавить урок</a>
                            </li>
                            <li class="nav-item links-header">
                                <a href="{{route('teacher-course')}}">Курс</a>
                            </li>
                            <li class="nav-item links-header">
                                <div class="">
                                    <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>
<script>
    function hoverBorder() {
        let button = document.getElementById('login-btn')
        button.addEventListener("mouseover", function() {
            button.classList.remove("gradient")
            button.classList.add("gradient-border")
        })
        button.addEventListener("mouseout", function() {
            button.classList.remove("gradient-border")
            button.classList.add("gradient")
        })
    }

    function hoverGradient() {
        let button = document.getElementById('reg-btn')
        button.addEventListener("mouseover", function() {
            button.classList.remove("gradient-border")
            button.classList.add("gradient")
        })
        button.addEventListener("mouseout", function() {
            button.classList.remove("gradient")
            button.classList.add("gradient-border")
        })
    }
    hoverBorder()
    hoverGradient()
</script>

</html>
