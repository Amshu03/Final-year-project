@extends('frontend.layouts.master')
@section('main_content')
    <div id="empresa" style="padding: 20px; margin: 1px">
        <div class="container">
            <div class="row" style="border: none;padding-top: 144px;
            border-radius: 5px;
            box-shadow: 0px 0 30px rgb(1 41 112 / 10%); 
            background-image: linear-gradient(to right, rgb(252, 249, 249) , rgb(184, 184, 182))">
                @isset($viewwantedboard)
                @foreach ($viewwantedboard as $viewwan)
                <div class="col-sm-4 col-md-4 col-lg-4 col-12" style=" margin-top: -10px">
                    <div class="card">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset($viewwan->image) }}" class="card-img-top" alt="..." style="height: 400px;">
                            <div class="card-body">
                              <h5 class="card-title">{{ $viewwan->datetime }}</h5>
                              <p class="card-text">{{ $viewwan->description }}</p>
                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
@endsection
