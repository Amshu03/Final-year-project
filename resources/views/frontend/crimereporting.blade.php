@extends('frontend.layouts.master')
@section('main_content')
    <div id="empresa" style="padding: 20px; margin: 1px">
        <div class="overlay"
        style="
    background: url('{{ asset('frontend/img/whitecuff.png') }}') center / cover no-repeat,
    linear-gradient(black, white);
    
  ">
        <div class="container">

            <div class="row"
                style="border: none;
            border-radius: 5px;
            box-shadow: 0px 0 30px rgb(1 41 112 / 10%);">
            
                <div class="col-sm-6 col-md-7 col-lg-7 text-dark" style="padding-top: 84px; margin-top: 129px">
                    <h1 style=" margin-right:-430px; color: black;">
                       <center> Welcome to crime reporting </center>
                    </h1>
                    <p style="
              padding-top: 0px;
              padding-right: 0px;
              margin-left:180px;
              margin-right:-380px;
              font-size:25px;
              color: black;
            ">
              <b>You have two options for reporting crime: directly via Crime or
              through FIR. If a crime hasn’t already been mentioned, you can
               add it. </b><br /><br />
                    </p>
                    
                    <h2 class="text-center" style=" margin-left:485px; color: black;">
                       File Complaints 
                    </h2>
                    <a class="btn btn-dark" href="{{ route('front.fir.remport') }}"
                        style="margin: 30px; margin-left: 510px; width: 103px; border-radius:40px">
                        FIR</a> 

                        <a href="/reporting/crimereport" class="btn btn-dark" type="button"
                        style="width: 103px; border-radius:40px; margin-left:-20px">
                        Crime
                     </a>
                </div>
                {{-- <div class="col-sm-6 col-md-5 col-lg-5 col-xl-5" style="margin-top: 158px">
                    @if ($viewwantedboard)
                        <h1 style=" font-size: 50px">
                            Missing Person 
                        </h1>
                        <img width="100%" height="auto" src="{{ asset($viewwantedboard->image) }}" />
                        <p
                            style="
              padding-top: 0px;
              padding-right: 0px;
              margin-right: -4px;
              transform: scale(0.98);
            ">
                            {{ $viewwantedboard->description }}<br />
                        </p>
                        <button class="btn btn-primary" type="button"
                            style="width: 120px; margin-left: 179px; margin-top: 38px">
                            Report
                        </button>
                    @endif
                </div> --}}
            </div>
        </div>
    </div>
@endsection
