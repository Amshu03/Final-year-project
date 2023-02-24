@extends('police.layouts.headerfooter')
@section('body-content')


    <div class="container-fluid  dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 text-center p-2"> All Incidents </h5>
                        {{-- <a href="{{ url('/police/users/add')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add User</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> Incident Type </th>
                                        <th> Incident Photo </th>
                                        <th> Incident Address </th>
                                        <th> Incident Time </th>
                                        <th> Incident description </th>
                                        <th> Your age? </th>
                                        <th> For </th>
                                        <th> Full Name </th>
                                        <th> Address </th>
                                        <th> Contact </th>
                                        <th> Email </th>
                                        <th> DOB </th>
                                        <th> Gender </th>
                                        <th> Driver Licensing No </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($crimeReport)
                                        @foreach ($crimeReport as $user)
                                            <tr>
                                                <td> {{ $user->incidentype }} </td>
                                                <td>
                                                    <img src="{{ asset($user->incidentimage) }}"
                                                        class="img-fluid rounded-circle" style="max-width:50px"
                                                        alt="{{ $user->incidentimage }}">
                                                </td>
                                                {{-- <td> {{ $user->incidentimage }} </td> --}}
                                                <td> {{ $user->incidentaddress }} </td>
                                                <td> {{ $user->incidenttime }} </td>
                                                <td> {{ $user->incidentdescription }} </td>
                                                <td> {{ $user->eightenornot }} </td>
                                                <td> {{ $user->forpforb }} </td>
                                                <td> {{ $user->fullname }} </td>
                                                <td> {{ $user->address }} </td>
                                                <td> {{ $user->contact }} </td>
                                                <td> {{ $user->email }} </td>
                                                <td> {{ $user->dob }} </td>
                                                <td> {{ $user->gender }} </td>
                                                <td> {{ $user->drivinglicno }} </td>
                                                <td>
                                                    <span
                                                        class="badge badge-{{ $user->status == 'pending' ? 'info' : ($user->status == 'processing' ? 'dark' : 'success') }}">{{ Str::ucfirst($user->status) }}</span>
                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('police.crime.remport.edit', $user->id) }}"
                                                            type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary" data-original-title="Edit">
                                                            <i class="fa fa-edit" style="color: white"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
