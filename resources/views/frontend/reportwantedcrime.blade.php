@extends('frontend.layouts.master')
@section('main_content')
    <div id="empresa" style="padding: 20px; margin: 1px">
        <div class="container" style="background-image: linear-gradient(to right, rgb(199, 195, 195) , rgb(110, 110, 109));">
            <div class="row"
                style="border: none;
            border-radius: 5px;
            box-shadow: 0px 0 30px rgb(1 41 112 / 10%);">
                <div class="col-sm-6 col-md-7 col-lg-7" style="padding-top: 84px; margin-top: 129px">
                    <div class="card">
                        <h5 class="card-header text-center"
                            style="
                        font-weight: 500;
                    "> New Report wanted crime
                        </h5>
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @error('phone')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @error('role')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('status') }}</strong>
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('reportwantedcrime.store') }}" id="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title"> Photo </label>
                                    <input type="file" name="image" placeholder="" autocomplete="off"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="catname">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="summernote" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone"> Date & Time </label>
                                    <input name="datetime" type="datetime-local" placeholder="" autocomplete="off"
                                        class="form-control">
                                </div>
                                {{-- <div class="form-group">
                                    <select class="form-control" name="status">
                                      <option value="">STATUS</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                  </div> --}}
                                <div class="row">
                                    <div class="col-sm-12 pl-0">
                                        <p class="text-center">
                                            <button type="submit" name="submit" class="btn btn-space btn-dark"
                                                style="border-radius:5px">submit</button>
                                            {{-- <a href="{{ url('/admin/reportwantedcrime') }}" class="btn btn-space btn-danger"> Back </a> --}}
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 col-xl-5" style="margin-top: -50px">
                    <img src="{{ asset('frontend/img/Handcuffss.png') }}"
                        style="
                width: 483px;
                height: 360px;
                /* background: url('{{ asset('frontend/img/Handcuffss.png') }}'), */
                  /* url('https://cdn.bootstrapstudio.io/placeholders/1400x800.png')
                    no-repeat; */
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
