@extends('frontend.layouts.master')
@section('main_content')
    <header class="masthead" style="background-image: url('contact-bg.jpg')">
        <div class="overlay"
            style="
        background: url('{{ asset('frontend/img/pic.jpg') }}') no-repeat;
        background-size: cover;
      ">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <p
                            style="
                font-size: 30px;
                padding-top: 0px;
                padding-bottom: 0px;
                margin-bottom: -8px;
                margin-top: -4px;
              ">
                            <br />Have questions? I have answers.<br /><br />
                        </p>
                        <a class="btn btn-dark" href="#qn" style="border-radius:6px">
                            Ask Questions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>
                    Thank you for considering using our online crime reporting system.
                    This system allows you to easily and securely report a crime or
                    suspicious activity online, without having to visit a police station
                    in person. If you have any questions about the process or need
                    assistance completing the form, please don't hesitate to ask. Our
                    team is here to help and we will do our best to answer any questions
                    you may have. We appreciate your help in keeping our community safe
                    and hope that this system makes it convenient for you to report any
                    incidents you may have witnessed or experienced.
                </p>
                @if (session('success'))
                    <div class="alert alert-success  fade show" role="alert">

                        <strong>Success: </strong> {{ session('success') }}
                    </div>
                @endif
                <form id="qn" action="{{ route('front.askquestion.store') }}" method="post" name="sentMessage">
                    @csrf
                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <input class="form-control" type="text" name="question" id="name" required=""
                                placeholder="Name" /><label class="form-label" for="text">Questions:&nbsp;</label>
                        </div>
                    </div>
                    <div class="control-group"></div>
                    <div class="mb-3">
                        <button class="btn btn-dark" id="sendMessageButton" type="submit"
                            style=" border-radius:6px
              ">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr />
@endsection
