@extends('frontend.layouts.master')
@section('main_content')
    <header class="masthead" style="background-image: url('home-bg.jpg')">
        <div class="overlay"
            style="
        background: url('{{ asset('frontend/img/gun.jpg') }}') center / cover no-repeat,
          linear-gradient(black, white);
        filter: brightness(112%) contrast(114%) grayscale(28%)
          hue-rotate(0deg) saturate(0%) sepia(0%);
        opacity: 0.59;
      ">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-9 mx-auto position-relative">
                    <div class="site-heading" style="--bs-body-bg: rgba(21, 20, 20, 0)">
                        <h1 style="font-size: 30px; ">
                            <br />To report a crime you've witnessed, you must first log in
                            to the system.<br /><br />
                        </h1>
                        <a class="btn btn-dark" href="{{ route('register') }}"
                            style="
                border-radius: 0px;
                border-color: #080808;
                margin-left: -2px;
                margin-right: 17px;
                padding-right: 25px;
                opacity: 0.98;
                padding: 10px 15px;
                filter: brightness(95%) grayscale(0%);
                backdrop-filter: blur(0px) invert(0%) saturate(75%);
                --bs-body-bg: rgba(42, 42, 42, 0);

              ">Register</a><a
                            class="btn btn-light" href="{{ route('login') }}"
                            style="
                /* border-color: #040404; */
                border-radius: 0px;
                margin-left: -2px;
                padding: 10px 15px;
                margin-right: 10px;
                backdrop-filter: blur(0px);
              ">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
