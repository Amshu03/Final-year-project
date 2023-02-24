@extends('frontend.layouts.master')
@section('main_content')
    <div id="empresa" style="padding: 20px; margin: 1px">
        <div class="container"
            style="border: none;
        border-radius: 5px;
        box-shadow: 0px 0 30px rgb(1 41 112 / 10%); background-image: linear-gradient(to right, #fff , rgb(104, 103, 103));">
            <form method="post" action="{{ route('front.crimereport.remport.store') }}" enctype="multipart/form-data"
                style=" padding-top: 84px; margin-top: 100px">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>success: </strong>{{ session('success') }}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <strong>Error: </strong>{{ $error }}
                    </div>
                @endforeach
                <div class="text-center"><strong>
                        <p>File Complaints &ndash; IC1 - CRIME</p>
                    </strong>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Incident Type</label>
                    <input type="text" name="incidentype" class="form-control" id="exampleFormControlInput1"
                        placeholder="">

                </div>
                {{-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Are you over 18 years of age?</label>
                    <div class="form-check">
                        <input class="form-check-input" value="yes" type="radio" name="eightenornot"
                            id="eightenornot1">
                        <label class="form-check-label" for="eightenornot1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="no" type="radio" name="eightenornot"
                            id="eightenornot2">
                        <label class="form-check-label" for="eightenornotgender2">
                            No
                        </label>
                    </div>
                </div> --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Please select a proper person type according to
                        the definition below.</label>
                    <div class="form-check">
                        <input class="form-check-input" value="Individual : If you are reporting this for yourself."
                            type="radio" name="forpforb" id="forpforb1">
                        <label class="form-check-label" for="forpforb1">
                            Individual : If you are reporting this for yourself.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"
                            value="Business : If you are responsible for reporting this for your employer, government agency, or your own business."
                            type="radio" name="forpforb" id="forpforb2">
                        <label class="form-check-label" for="forpforbgender2">
                            Business : If you are responsible for reporting this for your employer, government agency, or
                            your own business.
                        </label>
                    </div>
                </div>

                <p href="" class="btn btn-dark" style="width: 100%;text-align:left">Incident Details</p><br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Incident Photos</label>
                    <input type="file" name="incidentimage" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Incident Address(Location)</label>
                    <input type="text" name="incidentaddress" class="form-control" id="exampleFormControlInput1"
                        placeholder="Baneshowr,Kathmandu">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="datetime-local" name="incidenttime" class="form-control" id="exampleFormControlInput1"
                        placeholder="Baneshowr,Kathmandu">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Incident description</label>
                    <input type="text" name="incidentdescription" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <p href="" class="btn btn-dark" style="width: 100%;text-align:left">Yourself</p><br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact</label>
                    <input type="text" name="contact" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">DOB</label>
                    <input type="date" name="dob" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gender.</label>
                    <div class="form-check">
                        <input class="form-check-input" value="male" type="radio" name="gender" id="gender1">
                        <label class="form-check-label" for="gender1">
                            male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="female" type="radio" name="gender" id="gender2"
                            checked>
                        <label class="form-check-label" for="gender2">
                            female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="unknown" type="radio" name="gender" id="gender2"
                            checked>
                        <label class="form-check-label" for="gender2">
                            unknown
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Driver Licensing No</label>
                    <input type="number" name="drivinglicno" class="form-control" id="exampleFormControlInput1"
                        placeholder="">
                </div>
                <button type="submit" class="btn btn-dark" style="border-radius:6px">Submit</button>
            </form>
        </div>
    </div>
@endsection
