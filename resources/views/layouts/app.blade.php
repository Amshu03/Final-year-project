<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('login_a/css/Ludens-Users---2-Register.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />

    <!-- Scripts -->
    <style>
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border-radius: 0 !important;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border-radius: 8px !important;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #4daade;
            border-color: #4daade;
            box-shadow: 0px 10px 15px rgba(157, 157, 157, 0.4);
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #4daade;
            border-color: #4daade;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border-radius: 0 !important;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border-radius: 8px !important;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #4daade;
            border-color: #4daade;
            box-shadow: 0px 10px 15px rgba(157, 157, 157, 0.4);
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #4daade;
            border-color: #4daade;
        }

        .register-photo {
            background: #f1f7fc;
            padding: 80px 0;
        }

        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background: url(meeting.jpg);
            background-size: cover;
        }

        .register-photo .form-container {
            display: table;
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #505e6c;
        }

        @media (max-width: 991px) {
            .register-photo form {
                padding: 40px;
            }
        }

        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .register-photo form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 6px;
            height: 40px;
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px;
        }

        /* .register-photo form .btn-primary {
          background: #f4476b;
          border: none;
          border-radius: 4px;
          padding: 11px;
          box-shadow: none;
          margin-top: 35px;
          text-shadow: none;
          outline: none !important;
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
          background: #eb3b60;
        } */

        .register-photo form .btn-primary:active {
            transform: translateY(1px);
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .text-center {
            color: black;
        }

        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body style="background:rgb(158, 158, 158);">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
