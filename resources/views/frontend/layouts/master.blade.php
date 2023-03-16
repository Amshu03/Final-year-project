<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Crimereporting</title>
    <meta name="description" content="Pages" />
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
    <link rel="stylesheet" href="{{ asset('frontend/css/Corporate-Footer-Clean.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/dh-row-titile-text-image-right-1.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/Features-Image-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/Features-Image-images.css') }}" />
    <script src="https://kit.fontawesome.com/a854998fd2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>

<body style="padding-bottom: 0px; margin-bottom: -71px; margin-top: -68px">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav"
        style="
        background: url('https://cdn.bootstrapstudio.io/placeholders/1400x800.png');
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        margin-bottom: -1px;
      ">
        <div class="container-fluid">
            <div class="d-flex">
                <a href="/"><img
                        style="
                    background: var(--bs-navbar-brand-color);
                    padding-right: 0px;
                    margin-right: 0px;
                    margin-left: -1px;
                    border-radius: 5px;
                    margin-top:3px;
                    margin-bottom:3px;
                    height:70px;
                  "
                        src="{{ asset('frontend/img/Crs.png') }}" width="auto" /></a>
                <a class="navbar-brand" href="/" style="">ONLINE CRIME
                    REPORTING<br />
                    <strong>
                        Offence Defense</strong></a>
                <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 200px">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"
                            style="
                  color: rgb(13, 12, 12);
                  font-size: 17px;
                ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.about') }}"
                            style="
                  color: rgb(14, 14, 14);

                  font-size: 17px;
                ">About
                            us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact') }}"
                            style="
                  color: rgb(16, 15, 15);

                  font-size: 17px;
                ">Contact
                            us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.askquestion') }}"
                            style="
                  color: rgb(17, 16, 16);

                  font-size: 17px;
                ">Ask
                            questions</a>
                    </li>
                    @auth

                        <li class="nav-item">
                            <div class="dropdown open">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="userdrop"
                                    style="border-radius: 8px" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <form action="{{ route('logout') }}" method="post" class="dropdown-menu"
                                    aria-labelledby="userdrop">
                                    @csrf
                                    @if (Auth::user()->role != 'user')
                                        <a href="/{{ Str::lower(Auth::user()->role) }}"
                                            class="dropdown-item">{{ Str::ucfirst(Auth::user()->role) }} Pannel</a>
                                    @endif

                                    <button class="dropdown-item" href="#"><i class="fa fa-sign-out"> Logout
                                        </i></button>
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
                {{-- <div class="btn btn-dark">
                    <i class="fa fa-phone" aria-hidden="true"></i> Call +977-9800000000
                </div> --}}
            </div>
        </div>
    </nav>

    @yield('main_content')
    @yield('content')
    <!-- Remove the container if you want to extend the Footer to full width. -->
    {{-- <div class="container my-5"> --}}

    <footer class="text-white text-center text-lg-start" style="background-color: #1c1c1c !important;">
        <!-- Grid container -->
        <div class="container p-4 pb-1">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About Crimereporting</h5>

                    <p>
                        For one, it provides a convenient and discreet way for
                        individuals to report criminal activity without having to physically visit4
                        a police station or call emergency services.
                    </p>

                    <p>
                        This can be especially useful for
                        individuals who may be hesitant to report a crime in person or over the phone.
                    </p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Information</h5>

                    {{-- <div class="form-outline form-white mb-4">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" />
                        <label class="form-label" for="formControlLg">Search</label>
                    </div> --}}

                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Itahari Sunsari,
                                Nepal</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                class="ms-2">Amshu.regmi.3@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567
                                88</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567
                                89</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Wanted Of Week</h5>
                    @php
                        $viewwantedboard = App\Models\reportwantedcrime::where('status', 'active')
                            ->latest()
                            ->first();
                    @endphp

                    @if ($viewwantedboard)
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset($viewwantedboard->image) }}" width="100%" alt=""
                                    srcset="">
                            </div>
                            <div class="col">
                                <small><u>{{ \carbon\Carbon::parse($viewwantedboard->datetime)->format('Y, M d D') }}</u></small>
                                <br>
                                {{ $viewwantedboard->description }}
                            </div>
                        </div>
                    @else
                        <div class="jumbotron">
                            <h1 class="display-5">No one is missing now</h1>
                            <p class="lead">
                                <a class="btn btn-dark btn-md" href="/reportwantedcrime" role="button">Report</a>
                            </p>
                        </div>
                    @endif
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:&nbsp;
            <a class="text-white" href="https://mdbootstrap.com/">Crimereporting.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    {{-- </div> --}}
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/js/clean-blog.js') }}"></script>
    @yield('scripts')
</body>

</html>
