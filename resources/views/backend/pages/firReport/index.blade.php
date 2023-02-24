@extends('backend.layouts.headerfooter')
@section('body-content')


    <div class="container-fluid  dashboard-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h5 class="mb-0 text-center p-2"> Users </h5>
                    <a href="{{ url('/admin/users/add')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add User</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        {{-- <th> ID </th> --}}

                                        <th> Dis </th>
                                        <th> ps </th>
                                        <th> year </th>
                                        <th> fir_no </th>
                                        <th> date </th>
                                        <th> occurrence_offense </th>
                                        <th> information_recieved_at_ps </th>
                                        <th> ganeral_diary_reference_entry_no </th>
                                        <th> ganeral_diary_reference_time </th>
                                        <th> type_of_information </th>
                                        <th> direction_distance_from_ps </th>
                                        <th> beat_no </th>
                                        <th> address </th>
                                        <th> outside_of_limit_ps_name </th>
                                        <th> district </th>
                                        <th> name </th>
                                        <th> father_or_husband_name </th>
                                        <th> date_of_birth </th>
                                        <th> nationality </th>
                                        <th> occupation </th>
                                        <th> person_address </th>
                                        <th> value_of_properties_stolen </th>
                                        <th> investigation </th>
                                        <th> rank </th>
                                        <th> transfer_to_ps </th>
                                        <th> officer_name </th>
                                        <th> officer_rank </th>
                                        <th> officer_no </th>
                                        <th> officer_signature </th>
                                        <th> officer_date </th>
                                        <th> fir_contents </th>
                                        <th> inquest_report </th>
                                        <th> particulars_of_properties_stolen </th>
                                        <th> reason_for_delay_report </th>
                                        <th> detail_of_suspected </th>
                                        <th> act_section </th>
                                        <th>detail_of_known_file</th>
                                        <th>properties_stole_file</th>

                                        <th>evidance_file</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($firReport)
                                        @foreach ($firReport as $user)
                                            <tr>
                                                {{-- <td> {{ $user->id }} </td> --}}
                                                <td> {{ $user->dist }} </td>
                                                <td> {{ $user->ps }} </td>
                                                <td> {{ $user->year }} </td>
                                                <td> {{ $user->fir_no }} </td>
                                                <td> {{ $user->date }} </td>
                                                <td> {{ $user->occurrence_offense }} </td>
                                                <td> {{ $user->information_recieved_at_ps }} </td>
                                                <td> {{ $user->ganeral_diary_reference_entry_no }} </td>
                                                <td> {{ $user->ganeral_diary_reference_time }} </td>
                                                <td> {{ $user->type_of_information }} </td>
                                                <td> {{ $user->direction_distance_from_ps }} </td>
                                                <td> {{ $user->beat_no }} </td>
                                                <td> {{ $user->address }} </td>
                                                <td> {{ $user->outside_of_limit_ps_name }} </td>
                                                <td> {{ $user->district }} </td>
                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->father_or_husband_name }} </td>
                                                <td> {{ $user->date_of_birth }} </td>
                                                <td> {{ $user->nationality }} </td>
                                                <td> {{ $user->occupation }} </td>
                                                <td> {{ $user->person_address }} </td>
                                                <td> {{ $user->value_of_properties_stolen }} </td>
                                                <td> {{ $user->investigation }} </td>
                                                <td> {{ $user->rank }} </td>
                                                <td> {{ $user->transfer_to_ps }} </td>
                                                <td> {{ $user->officer_name }} </td>
                                                <td> {{ $user->officer_rank }} </td>
                                                <td> {{ $user->officer_no }} </td>
                                                <td> {{ $user->officer_signature }} </td>
                                                <td> {{ $user->officer_date }} </td>
                                                <td> {{ $user->fir_contents }} </td>
                                                <td> {{ $user->inquest_report }} </td>
                                                <td> {{ $user->particulars_of_properties_stolen }} </td>
                                                <td> {{ $user->reason_for_delay_report }} </td>
                                                <td> {{ $user->detail_of_suspected }} </td>
                                                <td> {{ $user->act_section }} </td>
                                                <td>
                                                    <img src="{{ asset($user->detail_of_known_file) }}" width="60px"
                                                        alt="" srcset="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset($user->properties_stole_file) }}" width="60px"
                                                        alt="" srcset="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset($user->evidance_file) }}" alt="" width="60px"
                                                        srcset="">
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-{{ $user->status == 'pending' ? 'info' : ($user->status == 'processing' ? 'dark' : 'success') }}">{{ Str::ucfirst($user->status) }}</span>

                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('admin.fir.remport.edit', $user->id) }}"
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
