@extends('frontend.layouts.master')
@section('main_content')
    <div id="empresa"
        style="border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgb(1 41 112 / 10%);
    background-image: linear-gradient(to right, rgb(252, 249, 249) , rgb(184, 184, 182));">
        <div class="container pb-3">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-7" style="padding-top: 84px; margin-top: 129px">
                    <h1 style=" font-size: 50px">About Crime</h1>
                    <p
                        style="
                padding-top: 0px;
                padding-right: 0px;
                margin-right: -4px;
                transform: scale(0.98);
              ">
                        Welcome to a system for reporting crimes online! We're dedicated
                        to making it simple and practical for you to report criminal
                        behavior or suspicious activity in your neighborhood. You can use
                        this system to report something without having to leave your home
                        and without going to a police station. Police will assess your
                        report and conduct an investigation. We value your assistance in
                        ensuring the safety of our community and hope that this method
                        will make it simple for you to play your part. We appreciate your
                        use of the online reporting system for crimes.
                    </p>
                    <a href="{{ route('front.crime.remport') }}"
                        style="
                    padding: 15px;
                    border-radius:10px;
                    border: 1px solid #00000c;
                    margin-left: 5px;">
                        File
                        complaint </a> &nbsp;

                    <a href="{{ url('/reportwantedcrime') }}"
                        style="
                        padding: 15px;
                        border: 1px solid #000005;
                        border-radius:10px;
                        margin-left: 2px;">Report
                        wanted
                        crime </a>&nbsp;

                    <a href="{{ url('/viewwantedboard') }}"
                        style="
                    padding: 15px;
                    border-radius:10px;
                    border: 1px solid #000008;">View
                        wanted board</a>


                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 col-xl-5" style="margin-top: -50px">
                    <img src="{{ asset('frontend/img/hand.png') }}"
                        style="
                width: 487px;
                height: 360px;
                border-radius:10px;
                background: url('{{ asset('frontend/img/hand.png') }}'),
                  url('https://cdn.bootstrapstudio.io/placeholders/1400x800.png')
                    no-repeat;
                padding: -4px;
                transform: scale(1.15);
                margin-right: 0px;
                margin-left: 16px;
                padding-top: 0px;
                margin-bottom: 27px;
                margin-top: 341px;

              "
                        width="451" height="360" />
                </div>
            </div>
        </div>
    </div>
@endsection
