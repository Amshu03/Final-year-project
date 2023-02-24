@extends('police.layouts.headerfooter')
@section('body-content')
    <div class="container-fluid  dashboard-content">

        <div class="row">
            <div class="col-md-6 mx-auto col-12">
                <div class="card">
                    <h5 class="card-header">Update Status</h5>
                    @error('status')
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
                        <form action="{{ route('police.crime.remport.update', $data['id']) }}" id="" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" value="{{ $data['status'] }}" name="status">
                                    <option value="pending" {{ $data['status'] == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="processing" {{ $data['status'] == 'processing' ? 'selected' : '' }}>
                                        Processing</option>
                                    <option value="completed" {{ $data['status'] == 'completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 pl-0">
                                    <p class="text-center">
                                        <button type="submit" name="submit" class="btn btn-space btn-primary">Update
                                            Status</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
