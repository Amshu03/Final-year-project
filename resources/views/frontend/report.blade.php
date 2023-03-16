@extends('frontend.layouts.master')
@section('main_content')
    <br>
    <br>
    <br>
    <section class="about-section" style=" margin-top:100px;" id="empresa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title text-center" style="margin-right: 670px; font-size:28px;">Select Reported Date</h1>
                </div>
            </div>
            <div class="col-12">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" class="btn w-100" style=" background-color: rgb(150, 148, 148); border-radius: 20px;" name="date" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn d-block " style="color:white; background-color: rgb(24, 24, 24); border-radius: 15px;">Check</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="col-12">
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Reported On</th>
                            <th>Status</th>
                        </tr>
                    </thead> --}}
                    <table class="table" style="border-collapse: collapse; width: 100%;">
                        <thead>
                          <tr style="background-color: #f2f2f2;">
                            <th style="border: 1px solid #ddd; padding: 8px;">S.N</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Reported On</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Status</th>
                          </tr>
                        </thead>

                        @foreach ($reports as $report)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ \carbon\Carbon::parse($report->created_at)->format('Y-m-d h:i A') }}
                                </td>
                                <td>{{ $report->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
