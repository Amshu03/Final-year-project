@extends('frontend.layouts.master')
@section('styles')
    <style>
        .contact-container {
            background: #FFFFFF;
            margin-top: 150px;
            background-image: linear-gradient(to right, rgb(255, 249, 249) , rgb(163, 163, 160));
            
        }

        .contact-container .contact-form .title {
            font-size: 2.5em;
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            color: #242424;
            margin: 5% 8%;
        }

        .contact-container .contact-form .subtitle {
            font-size: 1.2em;
            font-weight: 400;
            margin: 0 4% 5% 8%;
        }

        .contact-container .contact-form input,
        .contact-container .contact-form textarea {
            width: 330px;
            padding: 3%;
            margin: 2% 8%;
            color: #242424;
            border: 1px solid #B7B7B7;
        }

        .contact-container .contact-form input::placeholder,
        .contact-container .contact-form textarea::placeholder {
            color: #242424;
        }

        .contact-container .contact-form .btn-send {
            background: #A383C9;
            width: 180px;
            height: 60px;
            color: #FFFFFF;
            font-weight: 700;
            margin: 2% 8%;
            border: none;
        }
    </style>
@endsection
@section('main_content')
    <div class="contact-container d-flex">
        <div class=" col-md-8 col-12 mx-auto">
            <div class="row">
                <div class="col-12">
                    <h1 class="title text-center" style="margin-left: 200px">Contact Us</h1>
                </div>
                <div class="map col-md-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456476.7093820941!2d86.84799292589106!3d26.64130019882128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef11600d628f1f%3A0x42d962b578d99f88!2sSunsari!5e0!3m2!1sen!2snp!4v1676803245770!5m2!1sen!2snp"
                        width="100%" height="650px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                @if (session('success'))
                    <div class="alert alert-success  fade show" role="alert">

                        <strong>Success: </strong> {{ session('success') }}
                    </div>
                @endif
                <div class="contact-form col-md-7">
                    <h2 class="subtitle" style="margin-left:65px">We are here assist you.</h2>
                    <form action="" method="post">
                        @csrf
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <strong>Error: </strong>{{ $error }}
                            </div>
                        @endforeach
                        <input class="border rounded-pill form-control" type="text" name="name" placeholder="Your Name"/>
                        <input class="border rounded-pill form-control" type="email" name="email" placeholder="Your E-mail Adress" />
                        <input class="border rounded-pill form-control" type="tel" name="phone" placeholder="Your Phone Number" />
                        <textarea name="message" id="" rows="8" placeholder="Your Message" style="border-radius:10px"></textarea>
                        <button class="btn btn-dark mb-4" style="margin-left: 100px; border-radius:20px">Get a Call Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
